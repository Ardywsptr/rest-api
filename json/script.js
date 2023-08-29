let mahasiswa = {
    nama: "Ardy Wirasaputra",
    nim: 1810114501668,
    email: "ardywirasaputra@gmail.com"
}

//! JSON.stringify() -> mengubah object menjadi JSON (request)
// console.log(JSON.stringify(mahasiswa));

//! JSON.parse() -> mengubah JSON menjadi object (response) -> menggunakan XMLHttpRequest
// let xhr = new XMLHttpRequest();

// xhr.onreadystatechange = function () {
//     if (xhr.readyState === 4 && xhr.status === 200) {
//         let data = JSON.parse(this.responseText);
//         console.log(data);
//     }
// }

// xhr.open("GET", "coba.json", true);
// xhr.send();


//! JSON.parse() -> mengubah JSON menjadi object (response) -> menggunakan JQuery
$.getJSON("coba.json", function (data) {
    console.log(data);
});