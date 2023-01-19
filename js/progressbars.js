// déclarations 

let allProgressWrappers = document.querySelectorAll('.elementor-progress-wrapper.progress-info');

function makeid(length) {
    var result           = '';
    var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
    }
    return result;
}

let tempValues = [28,24,26,22,32,22,22,20,30,30]; 

const makeBars = () => {

    for (let i = 0; i < allProgressWrappers.length;i++){
        appendBar(allProgressWrappers[i],tempValues[i]);
    }
}

const appendBar = (item,value) => {
    let salmonBar = document.createElement('div');
    let span = document.createElement('span');
    let spanSvg = document.createElement('span');
    salmonBar.id = makeid(3);
    salmonBar.classList.add('salmon-bars');
    salmonBar.dataset.value = value;
    salmonBar.style.width = value + '%';
    salmonBar.style.backgroundColor = '#ffab85';
    spanSvg.innerHTML = '<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8.9861 8.28834L29.2388 13.6339C29.4753 13.6961 29.6457 13.902 29.6628 14.1459C29.6804 14.3892 29.5411 14.6168 29.3166 14.7127L22.8046 17.4777L31.8332 26.5062C31.94 26.6133 32 26.7582 32 26.9102C32 27.0623 31.9401 27.2074 31.8327 27.3143L27.3143 31.8327C27.2069 31.94 27.0617 32 26.9102 32C26.7587 32 26.613 31.9401 26.5061 31.8327L17.4776 22.8029L14.7125 29.3171C14.6171 29.5416 14.3895 29.6834 14.1457 29.6633C13.9018 29.6462 13.6964 29.4758 13.6337 29.2393L8.28805 8.98554C8.23601 8.78886 8.29264 8.57994 8.43652 8.4358C8.58014 8.29193 8.79035 8.23479 8.98627 8.28785L8.9861 8.28834ZM14.3131 27.3339L16.7565 21.5764C16.8307 21.4016 16.9868 21.2754 17.1736 21.2386C17.3603 21.2014 17.5519 21.2608 17.6861 21.3953L26.9099 30.6203L30.62 26.9101L21.3969 17.6871C21.2627 17.5529 21.2038 17.3608 21.2402 17.1746C21.2767 16.9884 21.4025 16.8317 21.578 16.7575L27.3328 14.3142L9.64275 9.6446L14.3131 27.3339ZM7.16407 7.16378C7.38754 6.94032 7.38754 6.5791 7.16407 6.35589L4.25083 3.44269C4.02736 3.21923 3.66614 3.21923 3.44293 3.44269C3.21946 3.66616 3.21946 4.02738 3.44293 4.25058L6.35617 7.16378C6.46764 7.27526 6.61382 7.33113 6.76025 7.33113C6.90642 7.33113 7.05259 7.27526 7.16407 7.16378H7.16407ZM-9.96577e-07 11.7535C-9.96577e-07 12.0696 0.256123 12.3249 0.571426 12.3249L4.6908 12.3239C5.00686 12.3239 5.26222 12.0678 5.26222 11.7525C5.26222 11.4364 5.0061 11.1811 4.6908 11.1811L0.571426 11.1821C0.255358 11.1821 -9.96577e-07 11.4385 -9.96577e-07 11.7535ZM12.3239 4.69074L12.3252 0.57142C12.3252 0.25612 12.0698 0 11.7537 0C11.4384 0 11.1823 0.255356 11.1823 0.57142L11.1813 4.69074C11.1813 5.00604 11.4366 5.26216 11.7527 5.26216C12.068 5.26216 12.3239 5.00681 12.3239 4.69074V4.69074ZM20.0633 4.2507C20.2868 4.02723 20.2868 3.66601 20.0633 3.4428C19.8398 3.21934 19.4786 3.21934 19.2554 3.4428L16.3429 6.356C16.1194 6.57947 16.1194 6.94069 16.3429 7.16389C16.4544 7.27537 16.6005 7.33124 16.747 7.33124C16.8931 7.33124 17.0396 7.27512 17.151 7.16389L20.0633 4.2507ZM3.44293 19.2552C3.21946 19.4787 3.21946 19.8399 3.44293 20.0631C3.55441 20.1746 3.70058 20.2305 3.84701 20.2305C3.99318 20.2305 4.13961 20.1743 4.25109 20.0631L7.16433 17.1506C7.3878 16.9272 7.3878 16.5659 7.16433 16.3427C6.94086 16.1193 6.57964 16.1193 6.35643 16.3427L3.44293 19.2552Z" fill="#F24E1D"/></svg>';
    span.textContent = '+'+ (value/2) + '%';
    item.appendChild(salmonBar);
    salmonBar.appendChild(span);
    salmonBar.appendChild(spanSvg);
    console.log(salmonBar);
}

const revealBars = () => {

    let targets = gsap.utils.toArray(".salmon-bars");

    gsap.from(targets,{
        width:'0',
        opacity:0,
        scrollTrigger:{
            trigger:'.elementor-progress-wrapper',
            // toggleActions:'restart pause resume reset',
            // scrub:4
        },
    })
}

const scrollToTop = (handler) => {

    let item = document.querySelector(handler);
    item.addEventListener('click',function(){
        window.scrollTo(0,0);
    })

}
    
window.addEventListener('DOMContentLoaded', (event) => {
    makeBars();
    revealBars();
    scrollToTop('#btn-scroll-to a');
});


