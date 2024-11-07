
<x-template : activePage="home">

    <!-- Page image -->
    <img src="{{ asset('image/wide.webp') }}" alt="" id="people" />


    <!-- Course -->
    <div class="courseContainer">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border ">
        <div class="col-lg-5  overflow-hidden " id="courseImageContainer">
            <img class="rounded-lg-6" src="{{ asset('image/hci2.jpg') }}" alt="" id="courseImage" >
        </div>
        <div class="col-lg-7 ">
            <h1 class=" fw-bold lh-1 text-body-emphasis">Belajar HCI dari 0 sampai ahli</h1>
            <p>12/03/2024.</p>

            <!-- add the functionality for the long text here -->
            <p class="lead">Belajar HCI (Human-Computer Interaction) dari 0 sampai Ahli adalah kursus komprehensif yang dirancang untuk membawa Anda memahami dan menguasai prinsip-prinsip interaksi manusia dan komputer dari dasar hingga tingkat lanjutan. Dalam kursus ini, Anda akan mempelajari konsep-konsep HCI, mulai dari desain antarmuka yang ramah pengguna, analisis kebutuhan pengguna, hingga teknik evaluasi pengalaman pengguna. Kursus ini juga mencakup berbagai studi kasus, praktik terbaik, dan keterampilan yang diperlukan untuk merancang produk digital yang intuitif dan efektif.</p>
            
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" id="primary">Read More</button>
            </div>
        </div>
    </div>

    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border ">
        <div class="col-lg-5  overflow-hidden " id="courseImageContainer">
            <img class="rounded-lg-6" src="{{ asset('image/hci.jpg') }}" alt="" id="courseImage" >
        </div>
        <div class="col-lg-7 ">
            <h1 class=" fw-bold lh-1 text-body-emphasis">Ingin belajar user interface? Ketemu langsung sama ahlinya</h1>
            <p>22/09/2010.</p>

            <!-- add the functionality for the long text here -->
            <p class="lead">Dibimbing oleh instruktur berpengalaman, kursus ini cocok untuk pemula yang baru mengenal dunia HCI, serta profesional yang ingin memperdalam keahlian mereka. Di akhir kursus, Anda akan memiliki kemampuan untuk mengembangkan antarmuka yang tidak hanya fungsional, tetapi juga memberikan pengalaman positif bagi pengguna. Bergabunglah dan mulai perjalanan Anda menjadi ahli HCI sekarang juga</p>
            
            
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold" id="primary">Read More</button>
            </div>
        </div>
    </div>

    </div>

</x-template>