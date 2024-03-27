//funkcia pre schovanie cookies listy  

const $cookiesBanner = document.querySelector(".cookies");
const $cookiesBannerButton = $cookiesBanner.querySelector("button");

$cookiesBannerButton.addEventListener("click", () => {
	$cookiesBanner.classList.add("hidden");
});












