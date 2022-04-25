/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
document.addEventListener('DOMContentLoaded', () => {
var t1 = document.getElementById('poczatki');
t1.addEventListener("click", () => {
pokazPoczatki();
});
var t2 = document.getElementById('polska');
t2.addEventListener("click", () => {
pokazPolska();
});
var t3 = document.getElementById('szybowce');
t3.addEventListener("click", () => {
pokazSzybowce();
});
var t4 = document.getElementById('wspolczesne');
t4.addEventListener("click", () => {
pokazWspolczesne();
});
});
function pokazPoczatki() {
fetch("http://localhost/pages/historie/poczatki")
.then((response) => {
if (response.status !== 200) {
return Promise.reject('Coś poszło nie tak!');
}
return response.text();
})
.then((data) => {
document.getElementById('blok').innerHTML=data;
})
.catch((error) => {
console.log(error);
});
}
function pokazPolska() {
fetch("http://localhost/pages/historie/polska")
.then((response) => {
if (response.status !== 200) {
return Promise.reject('Coś poszło nie tak!');
}
return response.text();
})
.then((data) => {
document.getElementById('blok').innerHTML=data;
})
.catch((error) => {
console.log(error);
});
}
function pokazSzybowce() {
fetch("http://localhost/pages/historie/szybowce")
.then((response) => {
if (response.status !== 200) {
return Promise.reject('Coś poszło nie tak!');
}
return response.text();
})
.then((data) => {
document.getElementById('blok').innerHTML=data;
})
.catch((error) => {
console.log(error);
});
}
function pokazWspolczesne() {
fetch("http://localhost/pages/historie/wspolczesne")
.then((response) => {
if (response.status !== 200) {
return Promise.reject('Coś poszło nie tak!');
}
return response.text();
})
.then((data) => {
document.getElementById('blok').innerHTML=data;
})
.catch((error) => {
console.log(error);
});
}
