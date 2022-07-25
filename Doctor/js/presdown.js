window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const prescription = this.document.getElementById("prescription");
            console.log(prescription);
            console.log(window);
            html2pdf().from(prescription).save();
        })
}