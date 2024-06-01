
//funkcia pre zavolanie alertu pri kliknuti na button
const $but = document.querySelector(".jsklas");
const $butbut = $but.querySelector("button");

$butbut.addEventListener("click", () => {
	alert('Vaša prihláška bola zaslaná');
});
