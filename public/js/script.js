let listkaryawan = document.getElementsByTagName('ul');
listkaryawan[0].addEventListener("click",tampilkan);
function tampilkan(event){
    alert("Cek data karyawan" + event.target.innerHTML);
}