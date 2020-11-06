document.addEventListener("DOMContentLoaded", () => {
    portfolioCardClickListener();
    truncateCountable();
});

function truncateCountable() {
    const profileCountableList = document.querySelectorAll('.profile-information .profile-countable .ammounts');
    const scientificNotation = [
        {value: 10**3, abbr: 'K'},
        {value: 10**6, abbr: 'M'},
        {value: 10**9, abbr: 'B'},
        {value: 10**12, abbr: 'T'},
    ];

    profileCountableList.forEach(countableElm => {
        const countValue = countableElm.innerText;
        const intCount = parseInt(countValue);

        const localeTruncate = () => {
            countableElm.innerText = intCount.toLocaleString("id-ID");
        }

        const scienTruncate = (divider, symbol) => {
            const floorVal = Math.floor(intCount/divider);
            const fixedTwo = (intCount/divider).toFixed(2);

            if((intCount % divider) === 0)
                countableElm.innerText = `${floorVal} ${symbol}`;
            else
                countableElm.innerText = `${fixedTwo} ${symbol}`;
        }

        scientificNotation.forEach(notation => {
            if(intCount < 10**4)
                localeTruncate();
            else if(intCount >= notation.value)
                scienTruncate(notation.value, notation.abbr)
        });
    });
}

function truncateDateString(timestamp) {
    const timestampNow = Math.round(new Date().getTime() / 1000);
    const dateSecond = [
        {value: 60, idn_call: 'menit'},
        {value: 60*60, idn_call: 'jam'},
        {value: 60*60*24, idn_call: 'hari'},
        {value: 60*60*24*7, idn_call: 'minggu'},
        {value: 60*60*24*30, idn_call: 'bulan'},
        {value: 60*60*24*30*12, idn_call: 'tahun'},
    ];

    let truncateResult;
    for(let i = 0; i < dateSecond.length; i++) {
        const stamp = dateSecond[i];
        const calculation = timestampNow - timestamp;

        if(calculation < 60)
            truncateResult = `${Math.ceil(calculation)} detik`;
        else if(calculation >= stamp.value)
            truncateResult = `${Math.round(calculation / stamp.value)} ${stamp.idn_call}`;
    }

    return truncateResult;
}

function portfolioCardClickListener() {
    const portfolioCards = document.querySelectorAll('.tab-content .card.portfolio'); 

    portfolioCards.forEach(elm => {
        const fillPortfolioModal = async (data) => {
            const profileImg = document.querySelector('#detail-portfolio-modal .post-info .profile-img img');
            const profileUsername = document.querySelector('#detail-portfolio-modal .post-info .profile-username');
            const postTime = document.querySelector('#detail-portfolio-modal .post-info .post-time');
            const postCarousel = document.querySelector('#detail-portfolio-modal .post-carousel img');
            const postDescription = document.querySelector('#detail-portfolio-modal .post-description');
            const likeAmmounts = document.querySelector('#detail-portfolio-modal .btn-footer.like .ammounts');
            const commentAmmounts = document.querySelector('#detail-portfolio-modal .btn-footer.comments .ammounts');

            /*const blobProfileImg = await fetch(data.profile_img)
                                            .then(response => response.blob())
                                            .then(resBlob => URL.createObjectURL(resBlob));
            const blobCarousel = await fetch(data.post_images)
                                        .then(response => response.blob())
                                        .then(resBlob => URL.createObjectURL(resBlob));*/

            profileImg.src = data.profile_img;
            profileUsername.innerText = `@${data.profile_username}`;
            postTime.innerText = `${truncateDateString(data.post_time)} yang lalu`;
            postCarousel.src = data.post_images;
            postDescription.innerText = data.post_description;
            likeAmmounts.innerText = `${parseInt(data.like_ammounts).toLocaleString("id-ID")} suka`;
            commentAmmounts.innerText = `${parseInt(data.comment_ammounts).toLocaleString("id-ID")} komentar`;
        }

        elm.onclick = () => {
            const portfolioData = {
                profile_img: elm.querySelector('.portfolio-data .profile-img').innerText,
                profile_username: elm.querySelector('.portfolio-data .profile-username').innerText,
                post_time: elm.querySelector('.portfolio-data .post-time').innerText,
                post_images: elm.querySelector('.portfolio-data .post-images').innerText,
                post_description: elm.querySelector('.portfolio-data .post-description').innerText,
                like_ammounts: elm.querySelector('.portfolio-data .like-ammounts').innerText,
                comment_ammounts: elm.querySelector('.portfolio-data .comment-ammounts').innerText
            };

            fillPortfolioModal(portfolioData);
            $('#detail-portfolio-modal').modal('show');
        }
    });
}