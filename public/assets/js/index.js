window.onload = function(){
    let bannerImg = document.querySelector('.banner-img img')
    let bannerTitle = document.querySelector('.banner-title')
    bannerImg.style.opacity=1
    bannerTitle.style.opacity = 1
}

document.querySelector('#tournament').addEventListener('click', function(){
    let games = document.querySelector('.games')
    games.scrollIntoView({behavior: "smooth"})
})