const antrianTeller = [];
const antrianCS = [];


function buatAntrian() {
    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const layanan = document.getElementById('layanan').value;

    let queue;

    if (layanan === 'teller') {
        const nomorAntrian = document.getElementById('tampil-antrian');
        if (antrianTeller.length < 10) {
            queue = antrianTeller.push({ name, phone });
            const tellerIsi = document.getElementById('teller-fill');
            tellerIsi.innerHTML = "";
            for (const antrian in antrianTeller) {
                tellerIsi.innerHTML +=
                    `<tr><th scope="row">${antrian}</th><td>${antrianTeller[antrian]['name']}</td><td>${antrianTeller[antrian]['phone']}</td></tr>`
            }
            nomorAntrian.innerHTML = `Nomor Antrian anda: A-${queue}`;
        }
        else {
            nomorAntrian.innerHTML = 'Antrian Teller penuh';
        }
    }
    if (layanan === 'customer_service') {
        const nomorAntrian = document.getElementById('tampil-antrian');
        if (antrianCS.length < 10) {
            queue = antrianCS.push({ name, phone });
            const csIsi = document.getElementById('cs-fill');
            csIsi.innerHTML = "";
            for (const antrian in antrianCS) {
                csIsi.innerHTML +=
                    `<tr><th scope="row">${antrian}</th><td>${antrianCS[antrian]['name']}</td><td>${antrianCS[antrian]['phone']}</td></tr>`
            }
            nomorAntrian.innerHTML = `Nomor Antrian anda: B-${queue}`;
        }
        else {
            nomorAntrian.innerHTML = 'Antrian Teller penuh';
        }
    }

}