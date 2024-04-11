window.copyToClipboard = function () {
    // Dapatkan teks dari elemen H1
    var headingElement = document.getElementById("myInput");
    var textToCopy = headingElement.innerText || headingElement.textContent;

    // Buat elemen sementara untuk menyalin teks
    var tempInput = document.createElement("input");
    tempInput.value = textToCopy;
    document.body.appendChild(tempInput);

    // Pilih teks dalam elemen input
    tempInput.select();

    // Salin teks ke clipboard
    document.execCommand("copy");

    // Hapus elemen sementara
    document.body.removeChild(tempInput);

    const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        },
    });
    Toast.fire({
        icon: "success",
        title: "Berhasil menyalin nomor",
    });
};
