document.addEventListener("DOMContentLoaded", main);

function main() {
    // Carousel Init
    $('#carouselExampleIndicators').carousel();

    const listJob = document.querySelectorAll('.list-job .card');

    // Detail Job Modal Value before Show
    listJob.forEach(jobElm => {
        const detailBtn = jobElm.querySelector('.card-body .btn');
        const jobData = {
            company_img: jobElm.querySelector('.job-data .company-img').innerText,
            company_name: jobElm.querySelector('.job-data .company-name').innerText, 
            company_location: jobElm.querySelector('.job-data .company-location').innerText,
            job_name: jobElm.querySelector('.job-data .job-name').innerText,
            job_type: jobElm.querySelector('.job-data .job-type').innerText,
            job_salary: jobElm.querySelector('.job-data .job-salary').innerText,
            job_description: jobElm.querySelector('.job-data .job-description').innerText,
            apply_endpoint: jobElm.querySelector('.job-data .apply-endpoint').innerText
        };

        const fillJobModal = async () => {
            // Detail Job Modal Element
            const detailJobModal = document.querySelector('#detail-job-modal');
            const companyImg = detailJobModal.querySelector('.company-img img');
            const companyName = detailJobModal.querySelector('.company-name');
            const companyLocation = detailJobModal.querySelector('.company-location > span');
            const jobName = detailJobModal.querySelector('.job-name');
            const jobType = detailJobModal.querySelectorAll('.job-type-salary .job-side-detail')[0];
            const jobSalary = detailJobModal.querySelectorAll('.job-type-salary .job-side-detail')[1];
            const jobDescription = detailJobModal.querySelector('.job-description p');

            // Set Value Into Modal
            const imgComp = await fetch(jobData.company_img).then(response => response.blob());
            companyImg.src = "";
            companyImg.src = URL.createObjectURL(imgComp);
            companyName.innerText = jobData.company_name;
            companyLocation.innerText = jobData.company_location;
            jobName.innerText = jobData.job_name;
            jobType.innerText = jobData.job_type;
            jobSalary.innerText = jobData.job_salary;
            jobDescription.innerText = jobData.job_description;

            const btnFavorite = document.querySelector('#detail-job-modal .btn-favorite-job');
            const btnApplyJob = document.querySelector('#detail-job-modal .btn-apply-job');

            btnFavorite.onclick = () => {
                const heartIcon = btnFavorite.querySelector('.fa-heart');
        
                if(heartIcon.classList.contains("far")) {
                    heartIcon.classList.remove("far");
                    heartIcon.classList.add("fas");
                }
                else {
                    heartIcon.classList.remove("fas");
                    heartIcon.classList.add("far");
                }
            }

            btnApplyJob.onclick = () => {
                $('#detail-job-modal').modal('hide');
                setTimeout(() => {
                    const applyMessage = document.querySelector('#apply-job-modal .apply-message');
                    const btnApply = document.querySelector('#apply-job-modal .btn-apply');

                    btnApply.href = jobData.apply_endpoint;
                    applyMessage.innerText = `Sebagai ${jobData.job_name} di ${jobData.company_name}`;
                    $('#apply-job-modal').modal('show');
                }, 500);
            }
        }

        jobElm.onclick = () => {
            if(window.screen.width <= 576) {
                fillJobModal();
                $('#detail-job-modal').modal('show');
            }
        }

        // When Detail Button Clicked and Detail Job Modal Opened
        detailBtn.onclick = () => {
            fillJobModal();
        }
    });
}