//
//progress bar 

document.addEventListener('DOMContentLoaded', function () {
    const progressBar = document.getElementById('my-progress-bar');
    const daysLeft = document.getElementById('days-left-text');

    if(!progressBar) return;
    const deadlinestring=progressBar.getAttribute('data-deadline');
    const deadlineDate = new Date(deadlinestring);
    const today=new Date();
    const timediff=deadlineDate.getTime()-today.getTime();
    
    if(timediff>0)
    {
        const daysleft=Math.floor(timediff/(1000*60*60*24));
        const hoursleft=Math.floor((timediff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        
        if(hoursleft==0) daysLeft.textContent = `${daysleft} days left for registration`;
        else{
        if(hoursleft ==1) daysLeft.textContent = `${daysleft} days and ${hoursleft} hour left for registration`;
        else
        daysLeft.textContent = `${daysleft} days and ${hoursleft} hours left for registration`;
        }

        const totalduration = 29 *24*60*60*1000; // 29 days in milliseconds
        const startdate = new Date(deadlineDate.getTime() - totalduration);

        const elapsedtime = today.getTime() - startdate.getTime();
        let percentage=(elapsedtime/totalduration)*100;

        if(percentage>100) percentage=100;
        if(percentage<0) percentage=0;

        const progressfill= progressBar.querySelector('.progress-fill');
        if(progressfill)
        {
            progressfill.style.width = `${percentage}%`;
        }
        progressBar.setAttribute('aria-valuenow', Math.round(percentage));
    }
    else{
        daysLeft.textContent = "Deadline passed";
        const progressfill= progressBar.querySelector('.progress-fill');
        if(progressfill)
        {
            progressfill.style.width = "0%";
        }
    }
});
