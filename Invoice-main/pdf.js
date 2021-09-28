window.onload = function () {
    document.getElementById("download")
        .addEventListener("click", () => {
            const invoice = this.document.getElementById("invoice");
            console.log(invoice);
            console.log(window);
            var opt = {
                filename: 'Donation-Invoice.pdf',
                image: { type: 'jpeg', quality: 0.98 }
                
            };
            html2pdf().from(invoice).set(opt).save();
        })
}