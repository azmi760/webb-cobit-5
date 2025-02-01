<?php
// Koneksi ke database
$conn = new mysqli('localhost', 'root', '', 'cbt 5');

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

session_start();
// Ambil nilai domain dan practice dari query string
if (isset($_GET['domain']) && isset($_GET['practice'])) {
    $domain = $_GET['domain'];  // Ambil nilai domain
    $practice = $_GET['practice'];  // Ambil nilai practice

    
    // Aktivitas berdasarkan domain dan practice
    $activities = [];

        //Bagian EDM
        if ($domain == 'EDM') {
            if ($practice == 'EDM01 - Ensure Governance Framework Setting and Maintenance') {
                $activities = [
                    ['EDM01.01', '(Evaluate the governance system.) Apa saja elemen utama dalam sistem tata kelola yang efektif?
                    Bagaimana cara mengevaluasi transparansi dan akuntabilitas dalam tata kelola?
                    Apa tantangan utama dalam evaluasi sistem tata kelola dan bagaimana cara mengatasinya?'],
                    ['EDM01.02', '(Direct the governance system.) Bagaimana cara mengarahkan sistem tata kelola agar mencapai tujuan organisasi?  
                    Apa peran pemimpin dalam memastikan kebijakan tata kelola efektif?  
                    Bagaimana mengintegrasikan visi dan misi organisasi dalam sistem tata kelola?  '],
                    ['EDM01.03', '(Monitor the governance system.) Bagaimana cara memantau efektivitas sistem tata kelola secara berkala?
                    Apa indikator utama untuk menilai kinerja sistem tata kelola?
                    Bagaimana menangani masalah yang terdeteksi selama pemantauan tata kelola?']
                ];
            } elseif ($practice == 'EDM02 - Ensure Benefits Delivery') {
                $activities = [
                    ['EDM02.01', '(Evaluate value optimisation.) Apa metode yang digunakan untuk menilai optimasi nilai dalam organisasi?
                                 Bagaimana cara mengukur keberhasilan dari upaya optimasi nilai?
                                 Apa faktor yang mempengaruhi nilai yang dihasilkan oleh organisasi?'],
                    ['EDM02.02', 'Bagaimana cara mengarahkan upaya optimasi nilai di seluruh organisasi?
                                Apa peran pemimpin dalam memastikan pencapaian optimasi nilai?
                                Bagaimana kebijakan dan strategi mendukung optimasi nilai dalam organisasi?'],
                    ['EDM02.03', 'Bagaimana cara memantau pencapaian optimasi nilai dalam organisasi?
                                Apa indikator utama yang digunakan untuk memonitor optimasi nilai?
                                Bagaimana menangani penurunan nilai yang terdeteksi selama pemantauan?']
                ];
            } elseif ($practice == 'EDM03 - Ensure Risk Optimisation') {
                $activities = [
                    ['EDM03.01', '(Evaluate risk management.)     Bagaimana cara mengevaluasi efektivitas manajemen risiko dalam organisasi?
                                Apa indikator utama untuk menilai keberhasilan pengelolaan risiko?
                                Bagaimana mengidentifikasi kelemahan dalam sistem manajemen risiko?'],
                    ['EDM03.02', 'Bagaimana cara mengarahkan strategi manajemen risiko yang efektif?
                                Apa peran pemimpin dalam pengelolaan risiko di organisasi?
                                Bagaimana memastikan bahwa kebijakan risiko diterapkan dengan konsisten?'],
                    ['EDM03.03', 'Bagaimana cara memantau kinerja sistem manajemen risiko?
                                Apa indikator yang digunakan untuk memonitor mitigasi risiko?
                                Bagaimana menangani perubahan dalam profil risiko organisasi?']
                ];
            } elseif ($practice == 'EDM04 - Ensure Resource Optimisation') {
                $activities = [
                    ['EDM04.01', '(Evaluate resource management.)   Apa kriteria untuk mengevaluasi pengelolaan sumber daya dalam organisasi?
                                Bagaimana cara mengukur efisiensi penggunaan sumber daya?
                                Apa dampak pengelolaan sumber daya yang buruk terhadap kinerja organisasi?'],
                    ['EDM04.02', 'Bagaimana cara mengarahkan penggunaan sumber daya agar sesuai dengan tujuan organisasi?
                                Apa peran pemimpin dalam mengelola sumber daya organisasi?
                                Bagaimana memastikan alokasi sumber daya dilakukan secara optimal?'],
                    ['EDM04.03', 'Apa metode yang digunakan untuk memantau penggunaan sumber daya secara efektif?
                                Bagaimana cara menilai keberhasilan pengelolaan sumber daya?
                                Bagaimana menangani ketidaksesuaian dalam pengelolaan sumber daya?']
                ];
            } elseif ($practice == 'EDM05 - Ensure Stakeholder Transparency') {
                $activities = [
                    ['EDM05.01', '(Evaluate stakeholder reporting requirements.)   Apa yang harus dievaluasi dalam persyaratan pelaporan pemangku kepentingan?
                                Bagaimana memastikan pelaporan memenuhi harapan pemangku kepentingan?
                                Apa indikator utama dalam menilai kebutuhan pelaporan pemangku kepentingan?'],
                    ['EDM05.02', 'Bagaimana cara mengarahkan komunikasi dan pelaporan kepada pemangku kepentingan?
                                Apa peran pemimpin dalam membangun komunikasi yang efektif dengan pemangku kepentingan?
                                Bagaimana memastikan transparansi dalam pelaporan kepada pemangku kepentingan?'],
                    ['EDM05.03', 'Bagaimana cara memantau efektivitas komunikasi dengan pemangku kepentingan?
                                Apa indikator keberhasilan dalam komunikasi dengan pemangku kepentingan?
                                Bagaimana menangani isu komunikasi yang muncul dengan pemangku kepentingan?']
                ];
            }

        //Bagian APO
    } elseif ($domain == 'APO') {
            if ($practice == 'APO01 - Manage the IT Management Framework') {
                $activities = [
                    ['APO01.01', '(Define the organisational structure.) Sejauh mana struktur organisasi saat ini mendukung efektivitas operasional?
                                Seberapa jelas faktor-faktor yang dipertimbangkan dalam merancang struktur organisasi?
                                Sejauh mana struktur organisasi membantu pencapaian tujuan bisnis?'],
                    ['APO01.02', 'Seberapa jelas langkah-langkah yang diambil dalam menetapkan peran dan tanggung jawab di organisasi?
                                Sejauh mana peran dan tanggung jawab yang ditetapkan mendukung tujuan organisasi?
                                Seberapa efektif tantangan dalam mendefinisikan peran dan tanggung jawab yang jelas dapat diatasi?'],
                    ['APO01.03', 'Sejauh mana pemahaman Anda tentang enablers dalam sistem manajemen organisasi?
                                Seberapa baik enabler dipelihara untuk menjaga efektivitas sistem manajemen?
                                Sejauh mana enabler mendukung pengambilan keputusan yang tepat dalam organisasi?'],
                    ['APO01.04', 'Seberapa jelas tujuan dan arah manajemen disampaikan kepada seluruh organisasi?
                                Sejauh mana komunikasi yang efektif mendukung pencapaian tujuan manajemen?
                                Seberapa efektif seluruh anggota organisasi memahami dan mengimplementasikan tujuan manajemen?'],
                    ['APO01.05', 'Sejauh mana penempatan fungsi TI mendukung strategi bisnis perusahaan?
                                Seberapa tepat kriteria yang digunakan dalam penempatan fungsi TI?
                                Sejauh mana fungsi TI berkontribusi terhadap pencapaian tujuan organisasi secara keseluruhan?'],
                    ['APO01.06', 'Sejauh mana kepemilikan data dan sistem didefinisikan dengan jelas di organisasi?
                                Seberapa efektif cara mendefinisikan kepemilikan data dan sistem dalam organisasi?
                                Sejauh mana kepemilikan data dan sistem mendukung manajemen organisasi secara keseluruhan?'],
                    ['APO01.07', 'Sejauh mana peningkatan berkelanjutan dalam proses bisnis dikelola dengan baik?
                                Seberapa jelas indikator yang digunakan untuk menilai keberhasilan peningkatan proses?
                                Sejauh mana hambatan dalam penerapan peningkatan berkelanjutan dapat diatasi?'],
                    ['APO01.08', 'Sejauh mana kepatuhan terhadap kebijakan dan prosedur organisasi dijaga?
                                Seberapa besar dampak dari kurangnya kepatuhan terhadap kebijakan organisasi?
                                Sejauh mana pemantauan dan penegakan kepatuhan dilakukan secara efektif?']
                ];
            } elseif ($practice == 'APO02 - Manage Strategy') {
                $activities = [
                    ['APO02.01', 'Sejauh mana Anda memahami arah strategis perusahaan?
                                Sejauh mana pemimpin perusahaan menyampaikan arah perusahaan ke seluruh tim?
                                Sejauh mana seluruh organisasi sejalan dengan arah perusahaan?'],
                    ['APO02.02', 'Sejauh mana aspek lingkungan dan kapabilitas saat ini dievaluasi dengan baik?
                                Sejauh mana kinerja organisasi dapat diukur berdasarkan lingkungan yang ada?
                                Sejauh mana alat yang digunakan untuk menilai kemampuan organisasi efektif?'],
                    ['APO02.03', 'Sejauh mana kapabilitas TI yang dibutuhkan di masa depan didefinisikan dengan baik?
                                Sejauh mana kapabilitas TI yang diperlukan mendukung tujuan bisnis jangka panjang?
                                Sejauh mana kapabilitas TI disesuaikan dengan arah strategis perusahaan?'],
                    ['APO02.04', 'Sejauh mana analisis gap dilakukan dengan langkah-langkah yang jelas dan efektif?
                                Sejauh mana gap analysis mendukung perencanaan strategis organisasi?
                                Sejauh mana tindakan setelah gap analysis dapat memperbaiki kesenjangan?'],
                    ['APO02.05', 'Sejauh mana rencana strategis yang didefinisikan efektif dalam mencapai tujuan organisasi?
                                Sejauh mana peta jalan yang disusun mendukung pencapaian tujuan jangka panjang?
                                Sejauh mana rencana strategis diselaraskan dengan sumber daya yang tersedia?'],
                    ['APO02.06', 'Sejauh mana strategi TI yang ditetapkan mendukung tujuan bisnis perusahaan?
                                Sejauh mana arsitektur TI yang didefinisikan sesuai dengan kebutuhan dan tujuan perusahaan?
                                Sejauh mana rencana strategi TI disesuaikan dengan kemampuan dan sumber daya yang ada di perusahaan?']
                ];
            } elseif ($practice == 'APO03 - Manage Enterprise Architecture') {
                $activities = [
                    ['APO03.01', 'Apa yang menurut Anda perlu dipertimbangkan dalam mengembangkan visi arsitektur perusahaan?
                                Bagaimana visi arsitektur perusahaan mendukung transformasi digital dalam organisasi Anda?
                                Apa peran arsitektur perusahaan dalam mendukung tujuan jangka panjang organisasi?'],
                    ['APO03.02', 'Apa itu arsitektur referensi, dan bagaimana Anda mendefinisikannya dalam konteks perusahaan?
                                Bagaimana arsitektur referensi dapat membantu menciptakan konsistensi dalam pengembangan sistem di organisasi Anda?
                                Apa manfaat utama yang Anda lihat dalam penggunaan arsitektur referensi dalam perencanaan TI perusahaan?'],
                    ['APO03.03', 'Apa langkah-langkah yang Anda gunakan dalam memilih peluang dan solusi yang tepat untuk organisasi Anda?
                                Faktor-faktor apa yang perlu dipertimbangkan dalam seleksi solusi TI yang tepat untuk perusahaan Anda?
                                Bagaimana Anda memastikan solusi TI yang dipilih dapat mendukung tujuan strategis perusahaan?'],
                    ['APO03.04', 'Apa saja langkah-langkah penting dalam mendefinisikan implementasi arsitektur TI di organisasi Anda?
                                Bagaimana Anda memastikan implementasi arsitektur TI berjalan sesuai dengan rencana yang telah ditetapkan?
                                Apa peran tim dalam memastikan pelaksanaan arsitektur TI yang efektif?'],
                    ['APO03.05', 'Apa yang Anda lakukan untuk menyediakan layanan arsitektur perusahaan yang efisien dalam organisasi Anda?
                                Manfaat apa saja yang Anda rasakan dari layanan arsitektur perusahaan yang disediakan oleh organisasi?
                                Bagaimana Anda memastikan layanan arsitektur tetap relevan dengan kebutuhan organisasi yang terus berkembang?']
                ];
            } elseif ($practice == 'APO04 - Manage Innovation') {
                $activities = [
                    ['APO04.01', 'Apa yang Anda lakukan untuk menciptakan lingkungan yang mendukung inovasi di organisasi?
                                Faktor-faktor apa yang paling penting untuk mendorong budaya inovasi dalam perusahaan?
                                Bagaimana Anda memastikan inovasi yang dihasilkan terintegrasi dalam strategi bisnis jangka panjang organisasi?'],
                    ['APO04.02', 'Bagaimana cara Anda menjaga pemahaman yang mendalam tentang lingkungan perusahaan dan perubahan yang terjadi?
                                Apa peran pemahaman yang baik tentang lingkungan perusahaan dalam pengambilan keputusan strategis organisasi?
                                Bagaimana wawasan mengenai lingkungan perusahaan membantu dalam meningkatkan daya saing organisasi?'],
                    ['APO04.03', 'Bagaimana Anda memantau dan memindai lingkungan teknologi untuk peluang dan tren yang relevan bagi organisasi?
                                Alat atau metode apa yang Anda gunakan untuk memantau tren teknologi yang relevan dengan perusahaan Anda?
                                Bagaimana Anda mengintegrasikan hasil pemantauan teknologi untuk memperkuat strategi perusahaan?'],
                    ['APO04.04', 'Bagaimana Anda menilai potensi teknologi baru dan ide inovasi yang dapat diterapkan di perusahaan?
                                Apa metode yang Anda gunakan untuk mengevaluasi dampak teknologi baru terhadap bisnis?
                                Bagaimana Anda menentukan prioritas teknologi yang memiliki potensi terbesar bagi perusahaan?'],
                    ['APO04.05', 'Recommend appropriate further initiatives.'],
                    ['APO04.06', 'Monitor the implementation and use of innovation.']
                ];
            } elseif ($practice == 'APO05 - Manage Portfolio') {
                $activities = [
                    ['APO05.01', 'Bagaimana Anda menentukan campuran investasi yang optimal untuk organisasi Anda?
                                Faktor-faktor apa saja yang Anda pertimbangkan dalam menentukan campuran investasi yang tepat?
                                Bagaimana Anda memastikan bahwa investasi yang dilakukan sesuai dengan tujuan jangka panjang perusahaan?'],
                    ['APO05.02', 'Apa langkah yang Anda ambil untuk menentukan ketersediaan dana bagi investasi perusahaan?
                                Apa saja sumber dana yang dapat digunakan untuk mendanai inisiatif TI atau bisnis di organisasi Anda?
                                Bagaimana Anda memilih sumber dana yang paling sesuai dengan kebutuhan organisasi?'],
                    ['APO05.03', 'Bagaimana Anda mengevaluasi dan memilih program yang akan didanai oleh organisasi?
                                Kriteria apa yang Anda gunakan untuk memilih program yang paling bernilai bagi perusahaan?
                                Apa langkah yang Anda lakukan untuk memastikan bahwa dana dialokasikan secara efisien?'],
                    ['APO05.04', 'Bagaimana Anda memantau dan mengoptimalkan kinerja portofolio investasi yang ada dalam perusahaan?
                                Apa indikator yang Anda gunakan untuk mengevaluasi kinerja portofolio investasi?
                                Bagaimana Anda menyampaikan laporan kinerja portofolio investasi kepada pemangku kepentingan dalam organisasi?'],
                    ['APO05.05', 'Bagaimana Anda memastikan portofolio investasi yang ada tetap sehat dan berkelanjutan?
                                Apa langkah yang Anda ambil untuk melakukan rebalancing portofolio investasi?
                                Bagaimana Anda memantau kinerja portofolio investasi secara berkelanjutan?'],
                    ['APO05.06', 'Bagaimana Anda mengelola pencapaian manfaat dari investasi yang dilakukan oleh organisasi?
                                Indikator apa yang Anda gunakan untuk menilai pencapaian manfaat dari investasi tersebut?
                                Bagaimana Anda memastikan bahwa manfaat yang dijanjikan dalam investasi tercapai secara efektif?']
                ];
            } elseif ($practice == 'APO06 - Manage Budget and Costs') {
                $activities = [
                    ['APO06.01', 'Apa langkah yang Anda lakukan untuk mengelola keuangan dan akuntansi secara efektif di organisasi Anda?
                                Bagaimana peran akuntansi dalam mendukung pengambilan keputusan bisnis di perusahaan?
                                Apa cara yang Anda terapkan untuk memastikan bahwa laporan keuangan yang dibuat akurat dan sesuai standar?'],
                    ['APO06.02', 'Apa langkah yang Anda ambil untuk menentukan ketersediaan dana bagi investasi perusahaan?
                                Apa saja sumber dana yang dapat digunakan untuk mendanai inisiatif TI atau bisnis di organisasi Anda?
                                Bagaimana Anda memilih sumber dana yang paling sesuai dengan kebutuhan organisasi?'],
                    ['APO06.03', 'Create and maintain budgets.'],
                    ['APO06.04', 'Model and allocate costs.'],
                    ['APO06.05', 'Manage costs.']
                ];
            } elseif ($practice == 'APO07 - Manage Human Resources') {
                $activities = [
                    ['APO07.01', 'Organisasi memiliki jumlah staf yang memadai untuk mendukung pencapaian tujuan bisnis.
                                Sumber daya manusia dalam organisasi selalu dipertimbangkan secara strategis untuk mengoptimalkan efektivitas.
                                Keputusan terkait penambahan atau pengurangan staf dilakukan berdasarkan analisis kebutuhan yang tepat.'],
                    ['APO07.02', 'Organisasi memiliki proses yang jelas untuk mengidentifikasi personel TI kunci yang berperan dalam proyek strategis.
                                Personel TI yang terlibat dalam pengambilan keputusan strategis memiliki pemahaman yang baik tentang arah bisnis perusahaan.
                                Keterlibatan personel TI kunci dalam perencanaan dan implementasi teknologi mendukung keberhasilan proyek perusahaan.'],
                    ['APO07.03', 'Maintain the skills and competencies of personnel.'],
                    ['APO07.04', 'Evaluate employee job performance.'],
                    ['APO07.05', 'Plan and track the usage of IT and business human resources.'],
                    ['APO07.06', 'Manage contract staff.']
                ];
            } elseif ($practice == 'APO08 - Manage Business Relationship') {
                $activities = [
                    ['APO08.01', 'Organisasi TI memiliki pemahaman yang mendalam tentang ekspektasi bisnis dan kebutuhan yang harus dipenuhi oleh TI.
                                Keberhasilan proyek TI sangat dipengaruhi oleh pemahaman yang jelas mengenai tujuan dan ekspektasi bisnis.
                                Tiap keputusan strategis TI selalu mempertimbangkan kebutuhan dan ekspektasi bisnis di seluruh organisasi.'],
                    ['APO08.02', 'Identify opportunities, risk and constraints for IT to enhance the business.'],
                    ['APO08.03', 'Manage the business relationship.'],
                    ['APO08.04', 'Co-ordinate and communicate.'],
                    ['APO08.05', 'Provide input to the continual improvement of services.']
                ];
            } elseif ($practice == 'APO09 - Manage Service Agreements') {
                $activities = [
                    ['APO09.01', 'Proses manajemen risiko TI dijalankan dengan sistematis untuk mengidentifikasi, menilai, dan mengelola risiko yang dapat mempengaruhi tujuan organisasi.
                                Keputusan terkait risiko TI selalu mempertimbangkan potensi dampak terhadap operasi bisnis dan aset perusahaan.
                                Penilaian risiko dilakukan secara berkala untuk memastikan bahwa semua potensi ancaman dan peluang yang berkaitan dengan TI dapat dikelola dengan baik.'],
                    ['APO09.02', 'Organisasi memiliki kebijakan keamanan yang jelas untuk melindungi data dan aset TI dari ancaman yang dapat mengganggu operasional bisnis.
                                Risiko keamanan TI dikelola melalui kombinasi teknologi, prosedur operasional, dan kebijakan yang memastikan perlindungan yang optimal.
                                Tim keamanan TI secara aktif melakukan pemantauan dan audit untuk mengidentifikasi potensi kerentanannya serta memastikan mitigasi yang tepat.'],
                    ['APO09.03', 'Define and prepare service agreements.'],
                    ['APO09.04', 'Monitor and report service levels.'],
                    ['APO09.05', 'Review service agreements and contracts.']
                ];
            } elseif ($practice == 'APO10 - Manage Supplier Relationships') {
                $activities = [
                    ['APO10.01', 'Proses manajemen perubahan TI dilakukan secara terstruktur untuk mengelola modifikasi sistem, aplikasi, dan infrastruktur tanpa mengganggu operasi bisnis.
                                Setiap perubahan yang diterapkan pada lingkungan TI dipertimbangkan dengan hati-hati untuk meminimalkan potensi gangguan atau risiko.
                                Organisasi memiliki prosedur untuk merencanakan, melaksanakan, dan mengevaluasi perubahan dalam infrastruktur TI secara terkoordinasi dengan semua pemangku kepentingan.'],
                    ['APO10.02', 'Risiko proyek TI dievaluasi sejak tahap perencanaan dan dikelola sepanjang siklus hidup proyek untuk memastikan pencapaian tujuan.
                                Proses manajemen risiko proyek mencakup identifikasi risiko, penilaian dampaknya, dan pengembangan rencana mitigasi yang sesuai.
                                Tim proyek memiliki pemahaman yang mendalam mengenai risiko yang terkait dengan proyek TI, dan berkomitmen untuk menanganinya dengan langkah-langkah preventif.'],
                    ['APO10.03', 'Manage supplier relationships and contracts.'],
                    ['APO10.04', 'Manage supplier risk.'],
                    ['APO10.05', 'Monitor supplier performance and compliance.']
                ];
            } elseif ($practice == 'APO11 - Manage Quality') {
                $activities = [
                    ['APO11.01', 'Hubungan dengan vendor dikelola dengan baik untuk memastikan kualitas produk dan layanan yang diberikan memenuhi standar yang ditetapkan oleh organisasi.
                                Proses pemilihan vendor dilakukan secara transparan dan berbasis pada kriteria yang sesuai dengan kebutuhan organisasi.
                                Tim pengadaan dan manajemen vendor secara rutin mengevaluasi kinerja vendor untuk memastikan kesesuaian dengan kontrak dan standar layanan yang disepakati.'],
                    ['APO11.02', 'Define and manage quality standards, practices and procedures.'],
                    ['APO11.03', 'Focus quality management on customers.'],
                    ['APO11.04', 'Perform quality monitoring, control and reviews.'],
                    ['APO11.05', 'Integrate quality management into solutions for development and service delivery.'],
                    ['APO11.06', 'Maintain continuous improvement.']
                ];
            } elseif ($practice == 'APO12 - Manage Risk') {
                $activities = [
                    ['APO12.01', 'Hubungan dengan pemangku kepentingan dikelola dengan baik untuk memastikan keberhasilan proyek TI dan pencapaian tujuan organisasi.
                                Keterlibatan pemangku kepentingan dilakukan secara aktif untuk memastikan bahwa kebutuhan dan ekspektasi mereka dipertimbangkan dalam setiap inisiatif TI.
                                Komunikasi yang efektif dan transparan dengan pemangku kepentingan membantu menjaga hubungan yang positif dan mendukung kesuksesan jangka panjang organisasi.'],
                    ['APO12.02', 'Analyse risk.'],
                    ['APO12.03', 'Maintain a risk profile.'],
                    ['APO12.04', 'Articulate risk.'],
                    ['APO12.05', 'Define a risk management action portfolio.'],
                    ['APO12.06', 'Respond to risk.']
                ];
            } elseif ($practice == 'APO13 - Manage Information Security') {
                $activities = [
                    ['APO13.01', 'Pengetahuan yang relevan bagi organisasi dikelola dengan baik untuk mendukung keputusan bisnis dan perbaikan proses secara berkelanjutan.
                                Organisasi memiliki proses untuk mengumpulkan, menyimpan, dan membagikan pengetahuan agar dapat diakses dengan mudah oleh seluruh karyawan.
                                Sistem manajemen pengetahuan memastikan bahwa informasi penting tidak hilang dan dapat digunakan kembali untuk meningkatkan efisiensi operasional dan inovasi.'],
                    ['APO13.02', 'Define and manage an information security risk treatment plan.'],
                    ['APO13.03', 'Monitor and review the ISMS.']
                ];
            }

        //Bagian BAI
    } elseif ($domain == 'BAI') {
        if ($practice == 'BAI01 - Manage Programmes and Projects') {
            $activities = [
                ['BAI01.01', '(Maintain a standard approach for programme and project management.) Organisasi memiliki kerangka kerja arsitektur perusahaan yang jelas dan terstruktur untuk memastikan semua komponen TI dan bisnis saling terhubung dan berfungsi secara sinergis.
                            Kerangka kerja arsitektur perusahaan digunakan untuk mengarahkan pengambilan keputusan dan memastikan bahwa semua inisiatif TI mendukung tujuan jangka panjang organisasi.
                            Organisasi secara rutin meninjau dan memperbarui kerangka kerja arsitektur perusahaan untuk mencocokkan dengan perubahan dalam strategi dan teknologi yang berkembang.'],
                ['BAI01.02', 'Initiate a programme.'],
                ['BAI01.03', 'Manage stakeholder engagement.'],
                ['BAI01.04', 'Develop and maintain the programme plan.'],
                ['BAI01.05', 'Launch and execute the programme.'],
                ['BAI01.06', 'Monitor, control and report on the programme outcomes.'],
                ['BAI01.07', 'Start up and initiate projects within a programme.'],
                ['BAI01.08', 'Plan projects.'],
                ['BAI01.09', 'Manage programme and project quality.'],
                ['BAI01.10', 'Manage programme and project risk.'],
                ['BAI01.11', 'Monitor and control projects.'],
                ['BAI01.12', 'Manage project resources and work packages.'],
                ['BAI01.13', 'Close a project or iteration.'],
                ['BAI01.14', 'Close a programme.']
            ];
        } elseif ($practice == 'BAI02 - Manage Requirements Definition') {
            $activities = [
                ['BAI02.01', '(Define and maintain business functional and technical requirements.) Visi arsitektur perusahaan dikembangkan untuk memastikan bahwa TI dan infrastruktur digital mendukung tujuan strategis jangka panjang organisasi.
                            Visi arsitektur perusahaan mencakup pendekatan yang terintegrasi antara proses bisnis, teknologi, dan informasi untuk memastikan efisiensi dan inovasi yang berkelanjutan.
                            Visi arsitektur perusahaan diperbarui secara berkala untuk mencocokkan dengan perubahan teknologi dan tren pasar, serta perkembangan dalam organisasi.'],
                ['BAI02.02', 'Perform a feasibility study and formulate alternative solutions.'],
                ['BAI02.03', 'Manage requirements risk.'],
                ['BAI02.04', 'Obtain approval of requirements and solutions.']
            ];
        } elseif ($practice == 'BAI03 - Manage Solutions Identification and Build') {
            $activities = [
                ['BAI03.01', '(Design high-level solutions.) Visi arsitektur perusahaan dikembangkan dengan mempertimbangkan kebutuhan bisnis dan teknologi jangka panjang untuk memastikan sinergi yang maksimal antara kedua aspek tersebut.
                            Visi arsitektur perusahaan disesuaikan dengan tujuan strategis organisasi untuk menciptakan landasan yang kuat bagi transformasi digital yang berkelanjutan.
                            Visi arsitektur perusahaan memastikan bahwa teknologi yang diterapkan sejalan dengan tujuan dan prioritas organisasi, serta mendukung inovasi dalam proses bisnis.'],
                ['BAI03.02', 'Design detailed solution components.'],
                ['BAI03.03', 'Develop solution components.'],
                ['BAI03.04', 'Procure solution components.'],
                ['BAI03.05', 'Build solutions.'],
                ['BAI03.06', 'Perform quality assurance.'],
                ['BAI03.07', 'Prepare for solution testing.'],
                ['BAI03.08', 'Execute solution testing.'],
                ['BAI03.09', 'Manage changes to requirements.'],
                ['BAI03.10', 'Maintain solutions.'],
                ['BAI03.11', 'Define IT services and maintain the service portfolio.']
            ];
        } elseif ($practice == 'BAI04 - Manage Availability and Capacity') {
            $activities = [
                ['BAI04.01', '(Assess current availability, performance and capacity and create a baseline.) Lingkungan yang mendukung inovasi dibangun dengan mempromosikan budaya kolaborasi dan keterbukaan terhadap ide-ide baru yang dapat meningkatkan proses dan produk organisasi.
                            Fasilitas dan sumber daya yang diperlukan untuk mendukung inovasi, seperti alat kolaborasi digital dan ruang kerja kreatif, disediakan untuk memastikan ide-ide baru dapat berkembang dengan baik.
                            Organisasi secara aktif mendorong eksperimen dan pendekatan baru dengan memberikan kebebasan kepada tim untuk mencoba solusi yang berisiko namun memiliki potensi besar untuk keberhasilan jangka panjang.'],
                ['BAI04.02', 'Assess business impact.'],
                ['BAI04.03', 'Plan for new or changed service requirements.'],
                ['BAI04.04', 'Monitor and review availability and capacity.'],
                ['BAI04.05', 'Investigate and address availability, performance and capacity issues.']
            ];
        } elseif ($practice == 'BAI05 - Manage Organisational Change Enablement') {
            $activities = [
                ['BAI05.01', '(Establish the desire to change.) Keputusan mengenai campuran investasi yang optimal didasarkan pada analisis yang cermat terhadap kebutuhan jangka panjang organisasi dan prioritas strategis yang ada.
                            Perusahaan secara rutin mengevaluasi portofolio investasi untuk memastikan keseimbangan antara risiko dan potensi keuntungan, serta memastikan kesesuaiannya dengan tujuan organisasi.
                            Campuran investasi yang ditetapkan mencakup alokasi yang jelas untuk berbagai inisiatif strategis, baik dalam jangka pendek maupun jangka panjang, dengan mempertimbangkan dinamika pasar dan perkembangan ekonomi.'],
                ['BAI05.02', 'Form an effective implementation team.'],
                ['BAI05.03', 'Communicate desired vision.'],
                ['BAI05.04', 'Empower role players and identify short-term wins.'],
                ['BAI05.05', 'Enable operation and use.'],
                ['BAI05.06', 'Embed new approaches.'],
                ['BAI05.07', 'Sustain changes.']
            ];
        } elseif ($practice == 'BAI06 - Manage Changes') {
            $activities = [
                ['BAI06.01', 'Evaluate, prioritise and authorise change requests.'],
                ['BAI06.02', 'Manage emergency changes.'],
                ['BAI06.03', 'Track and report change status.'],
                ['BAI06.04', 'Close and document the changes.']
            ];
        } elseif ($practice == 'BAI07 - Manage Change Acceptance and Transitioning') {
            $activities = [
                ['BAI07.01', 'Establish an implementation plan.'],
                ['BAI07.02', 'Plan business process, system and data conversion.'],
                ['BAI07.03', 'Plan acceptance tests.'],
                ['BAI07.04', 'Establish a test environment.'],
                ['BAI07.05', 'Perform acceptance tests.'],
                ['BAI07.06', 'Promote to production and manage releases.'],
                ['BAI07.07', 'Provide early production support.'],
                ['BAI07.08', 'Perform a post-implementation review.']
            ];
        } elseif ($practice == 'BAI08 - Manage Knowledge') {
            $activities = [
                ['BAI08.01', 'Nurture and facilitate a knowledge-sharing culture.'],
                ['BAI08.02', 'Identify and classify sources of information.'],
                ['BAI08.03', 'Organise and contextualise information into knowledge.'],
                ['BAI08.04', 'Use and share knowledge.'],
                ['BAI08.05', 'Evaluate and retire information.']
            ];
        } elseif ($practice == 'BAI09 - Manage Assets') {
            $activities = [
                ['BAI09.01', 'Identify and record current assets.'],
                ['BAI09.02', 'Manage critical assets.'],
                ['BAI09.03', 'Manage the asset life cycle.'],
                ['BAI09.04', 'Optimise asset costs.'],
                ['BAI09.05', 'Manage licences.']
            ];
        } elseif ($practice == 'BAI10 - Manage Configuration') {
            $activities = [
                ['BAI10.01', 'Establish and maintain a configuration model.'],
                ['BAI10.02', 'Establish and maintain a configuration repository and baseline.'],
                ['BAI10.03', 'Maintain and control configuration items.'],
                ['BAI10.04', 'Produce status and configuration reports.'],
                ['BAI10.05', 'Verify and review integrity of the configuration repository.']
            ];
        }

        //Bagian DSS
    } elseif ($domain == 'DSS') {
        if ($practice == 'DSS01 - Manage Operations') {
            $activities = [
                ['DSS01.01', '(Perform operational procedures.) Apakah operasional organisasi dikelola dengan fokus pada efisiensi, efektivitas, dan pemenuhan tujuan bisnis, sehingga dapat memastikan proses bisnis berjalan secara lancar dan terukur?
Apakah tantangan yang muncul dalam pengelolaan operasional diidentifikasi secara proaktif dan ditanggapi dengan solusi yang sesuai untuk menjaga kelancaran dan kontinuitas operasional?
Apakah perusahaan secara rutin melakukan evaluasi terhadap prosedur dan kebijakan operasional untuk memastikan bahwa mereka sesuai dengan standar industri dan memenuhi ekspektasi pelanggan serta pemangku kepentingan?'],
                ['DSS01.02', 'Manage outsourced IT services.'],
                ['DSS01.03', 'Monitor IT infrastructure.'],
                ['DSS01.04', 'Manage the environment.'],
                ['DSS01.05', 'Manage facilities.']
            ];
        } elseif ($practice == 'DSS02 - Manage Service Requests and Incidents') {
            $activities = [
                ['DSS02.01', '(Define incident and service request classification schemes.) Apakah layanan yang disediakan oleh organisasi memenuhi kebutuhan pelanggan dan stakeholder secara konsisten?
Apakah pemantauan kualitas layanan dilakukan secara berkelanjutan untuk memastikan layanan yang diberikan selalu sesuai dengan standar yang telah ditetapkan?
Apakah organisasi memiliki prosedur yang jelas untuk menangani keluhan dan masalah yang muncul terkait layanan yang disediakan?'],
                ['DSS02.02', 'Record, classify and prioritise requests and incidents.'],
                ['DSS02.03', 'Verify, approve and fulfil service requests.'],
                ['DSS02.04', 'Investigate, diagnose and allocate incidents.'],
                ['DSS02.05', 'Resolve and recover from incidents.'],
                ['DSS02.06', 'Close service requests and incidents.'],
                ['DSS02.07', 'Track status and produce reports.']
            ];
        } elseif ($practice == 'DSS03 - Manage Problems') {
            $activities = [
                ['DSS03.01', '(Identify and classify problems.) Apakah organisasi secara teratur memantau dan mengevaluasi kinerja layanan untuk memastikan bahwa kapasitas yang ada cukup untuk memenuhi kebutuhan bisnis?
Apakah terdapat prosedur yang jelas untuk menilai apakah kapasitas yang tersedia sudah mencukupi untuk mendukung permintaan yang ada dan yang diproyeksikan di masa depan?
Apakah analisis kinerja dan kapasitas dilakukan untuk mengidentifikasi kemungkinan bottleneck atau area yang membutuhkan peningkatan?'],
                ['DSS03.02', 'Investigate and diagnose problems.'],
                ['DSS03.03', 'Raise known errors.'],
                ['DSS03.04', 'Resolve and close problems.'],
                ['DSS03.05', 'Perform proactive problem management.']
            ];
        } elseif ($practice == 'DSS04 - Manage Continuity') {
            $activities = [
                ['DSS04.01', '(Define the business continuity policy, objectives and scope.) Apakah organisasi memiliki prosedur yang jelas untuk memastikan kelangsungan layanan meskipun terjadi gangguan atau bencana?
Apakah rencana pemulihan bencana (disaster recovery) sudah diterapkan dengan baik untuk menjaga ketersediaan layanan TI yang kritikal?
Apakah ada mekanisme untuk secara proaktif mengidentifikasi dan mengatasi potensi gangguan yang dapat mempengaruhi layanan yang terus berjalan?'],
                ['DSS04.02', 'Maintain a continuity strategy.'],
                ['DSS04.03', 'Develop and implement a business continuity response.'],
                ['DSS04.04', 'Exercise, test and review the BCP.'],
                ['DSS04.05', 'Review, maintain and improve the continuity plan.'],
                ['DSS04.06', 'Conduct continuity plan training.'],
                ['DSS04.07', 'Manage backup arrangements.'],
                ['DSS04.08', 'Conduct post-resumption review.']
            ];
        } elseif ($practice == 'DSS05 - Manage Security Services') {
            $activities = [
                ['DSS05.01', '(Protect against malware.) Apakah organisasi memiliki kebijakan keamanan sistem yang jelas dan diterapkan secara konsisten di seluruh lingkungan TI?
Apakah sistem keamanan yang diterapkan mampu melindungi data dan informasi sensitif dari ancaman eksternal dan internal?
Apakah ada prosedur yang jelas untuk mengidentifikasi, menangani, dan melaporkan insiden keamanan dalam waktu yang cepat?'],
                ['DSS05.02', 'Manage network and connectivity security.'],
                ['DSS05.03', 'Manage endpoint security.'],
                ['DSS05.04', 'Manage user identity and logical access.'],
                ['DSS05.05', 'Manage physical access to IT assets.'],
                ['DSS05.06', 'Manage sensitive documents and output devices.'],
                ['DSS05.07', 'Monitor the infrastructure for security-related events.']
            ];
        } elseif ($practice == 'DSS06 - Manage Business Process Controls') {
            $activities = [
                ['DSS06.01', '(Align control activities embedded in business processes with enterprise objectives.) Apakah organisasi memiliki proses formal untuk mengidentifikasi dan menilai risiko TI yang dapat mempengaruhi operasional dan tujuan bisnis?
Apakah ada mekanisme yang jelas untuk memprioritaskan risiko TI berdasarkan dampaknya terhadap organisasi?
Apakah organisasi secara teratur mengevaluasi dan memperbarui kebijakan serta prosedur manajemen risiko untuk mengakomodasi perubahan lingkungan TI?'],
                ['DSS06.02', 'Control the processing of information.'],
                ['DSS06.03', 'Manage roles, responsibilities, access privileges and levels of authority.'],
                ['DSS06.04', 'Manage errors and exceptions.'],
                ['DSS06.05', 'Ensure traceability of information events and accountabilities.'],
                ['DSS06.06', 'Secure information assets.']
            ];
        }

        //Bagian MEA
    } elseif ($domain == 'MEA') {
        if ($practice == 'MEA01 - Monitor, Evaluate and Assess Performance and Conformance') {
            $activities = [
                ['MEA01.01', '(Establish a monitoring approach.) Apakah organisasi memiliki sistem untuk memantau kinerja TI secara terus-menerus untuk memastikan pencapaian tujuan bisnis?
Apakah ada indikator kinerja utama (KPI) yang jelas untuk mengevaluasi efektivitas dan efisiensi operasional TI?
Apakah organisasi melakukan evaluasi kinerja TI secara berkala untuk memastikan bahwa TI mendukung kebutuhan dan tujuan bisnis yang berubah?'],
                ['MEA01.02', 'Set performance and conformance targets.'],
                ['MEA01.03', 'Collect and process performance and conformance data.'],
                ['MEA01.04', 'Analyse and report performance.'],
                ['MEA01.05', 'Ensure the implementation of corrective actions.']
            ];
        } elseif ($practice == 'MEA02 - Monitor, Evaluate and Assess the System of Internal Control') {
            $activities = [
                ['MEA02.01', '(Monitor internal controls.) Apakah organisasi memiliki sistem yang efektif untuk memantau dan mengevaluasi kontrol internal yang diterapkan pada TI?
Apakah ada proses yang jelas untuk mengidentifikasi dan mengatasi potensi risiko terkait kontrol internal TI?
Apakah organisasi melakukan audit internal secara berkala untuk memastikan bahwa kontrol internal berfungsi dengan baik?'],
                ['MEA02.02', 'Review business process controls effectiveness.'],
                ['MEA02.03', 'Perform control self-assessments.'],
                ['MEA02.04', 'Identify and report control deficiencies.'],
                ['MEA02.05', 'Ensure that assurance providers are independent and qualified.'],
                ['MEA02.06', 'Plan assurance initiatives.'],
                ['MEA02.07', 'Scope assurance initiatives.'],
                ['MEA02.08', 'Execute assurance initiatives.']
            ];
        } elseif ($practice == 'MEA03 - Monitor, Evaluate and Assess Compliance with External Requirements') {
            $activities = [
                ['MEA03.01', '(Identify external compliance requirements.) Apakah organisasi memiliki sistem untuk memantau dan mengevaluasi manajemen risiko terkait TI secara efektif?
Apakah pendekatan yang digunakan untuk mengelola risiko TI selalu diperbarui untuk menghadapi tantangan dan ancaman baru?
Apakah risiko terkait TI dievaluasi dalam konteks dampaknya terhadap tujuan dan operasional bisnis secara keseluruhan?'],
                ['MEA03.02', 'Optimise response to external requirements.'],
                ['MEA03.03', 'Confirm external compliance.'],
                ['MEA03.04', 'Obtain assurance of external compliance.']
            ];
        }
    }
 // Pastikan $activities terisi
if (empty($activities)) {
    echo "<p>Tidak ada aktivitas untuk domain dan practice yang dipilih.</p>";
    exit;
}

// Inisialisasi variabel
$total_level = 0;
$activity_count = count($activities); // Jumlah aktivitas
$ratings = [];
$username = $_SESSION['username'] ?? 'guest';

// Memproses input dari form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($activities as $activity) {
        $activity_code = $activity[0];
        $activity_description = $activity[1];

        // Ambil nilai dari form
        if (isset($_POST['rating_' . $activity_code])) {
            $rating_value = (float)$_POST['rating_' . $activity_code];
            if ($rating_value < 1 || $rating_value > 5) {
                echo "<p>Rating tidak valid untuk aktivitas $activity_code.</p>";
                continue;
            }
        } else {
            $rating_value = 0.0;
        }

        $ratings[] = $rating_value;
        $total_level += $rating_value;
    }

    // Hitung rata-rata maturity level
    $average_rating = $activity_count > 0 ? $total_level / $activity_count : 0.0;
    $rounded_level = round($average_rating);

    // Tentukan kondisi berdasarkan rounded_level
    switch ($rounded_level) {
        case 0: $condition = 'Tidak ada'; break;
        case 1: $condition = 'Awal'; break;
        case 2: $condition = 'Terdefinisi'; break;
        case 3: $condition = 'Dikelola'; break;
        case 4: $condition = 'Terukur'; break;
        case 5: $condition = 'Optimal'; break;
        default: $condition = 'Tidak Diketahui'; break;
    }

    // Simpan ke database
    foreach ($activities as $index => $activity) {
        $activity_code = $activity[0];
        $activity_deskripsi = $activity[1];
        $rating_value = $ratings[$index];

        // Simpan data per aktivitas
        $stmt = $conn->prepare(
            "INSERT INTO hasil (username, domain, practice, activity_code, activity_deskripsi, rating, average_rating) 
             VALUES (?, ?, ?, ?, ?, ?, ?)"
        );
        $stmt->bind_param("sssssdd", $username, $domain, $practice, $activity_code, $activity_deskripsi, $rating_value, $average_rating);

        if (!$stmt->execute()) {
            echo "<p>Error: " . $stmt->error . "</p>";
        }
    }

    // Tampilkan hasil
    echo "<div class='container'>";
    echo "<h2>Informasi Domain</h2>";
    echo "<table border='1' style='width:100%;'>";
    echo "<tr><th>Domain</th><th>Deskripsi Domain</th><th>Rata-rata Maturity Level</th><th>Level yang Mendekati Rata-rata</th><th>Kondisi (COBIT 5)</th></tr>";
    echo "<tr>";
    echo "<td>$domain</td>";
    echo "<td>$practice</td>";
    echo "<td>" . number_format($average_rating, 2) . "</td>";
    echo "<td>" . $rounded_level . "</td>";
    echo "<td>" . $condition . "</td>";
    echo "</tr>";
    echo "</table>";
    echo "</div>";
}}
?>

<!-- Form Aktivitas -->
<div class="container">
    <h2>Activity yang Dipilih</h2>
    <form action="" method="POST">
        <table border="1" style="width:100%;">
            <tr><th>Nomor Activity</th><th>Deskripsi</th><th>Maturity Level</th></tr>
            <?php foreach ($activities as $activity): ?>
                <tr>
                    <td><?= htmlspecialchars($activity[0]) ?></td>
                    <td><?= htmlspecialchars($activity[1]) ?></td>
                    <td>
                        <input type="number" 
                               name="rating_<?= htmlspecialchars($activity[0]) ?>" 
                               id="rating_<?= htmlspecialchars($activity[0]) ?>" 
                               min="1" max="5" step="1" value="1" />
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div style="margin-top: 20px;">
            <button type="submit" name="submit" value="save">Simpan</button>
            <a href="index.php"><button type="button">Kembali</button></a>
        </div>
    </form>
</div>

<!-- Chart untuk Menampilkan Rata-rata Maturity Level -->
<div class="container">
    <h2>Grafik Rata-rata Maturity Level</h2>
    <canvas id="activityChart" width="400" height="200"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Mengambil data PHP dan mengubahnya menjadi array JavaScript
    var activityLabels = <?php echo json_encode(array_column($activities, 0)); ?>; // Kode aktivitas
    var averageRatings = <?php echo json_encode($ratings); ?>; // Rating yang diberikan untuk masing-masing aktivitas

    var ctx = document.getElementById('activityChart').getContext('2d');
    var activityChart = new Chart(ctx, {
        type: 'bar', // Jenis chart: bar chart
        data: {
            labels: activityLabels, // Label untuk setiap aktivitas
            datasets: [{
                label: 'Rata-rata Maturity Level',
                data: averageRatings, // Data untuk rata-rata maturity level
                backgroundColor: 'rgba(54, 162, 235, 0.6)', // Warna batang chart
                borderColor: 'rgba(54, 162, 235, 1)', // Warna border batang
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>

<style>
    /* CSS untuk membuat checkbox tampil horizontal tanpa ada yang turun */
    .checkbox-group {
        display: flex;
        justify-content: space-between; /* Membuat jarak rata di antara checkbox */
        width: 100%; /* Membuat group checkbox memenuhi lebar penuh */
    }

    .checkbox-inline {
        flex: 1; /* Menyebarkan checkbox secara merata */
        text-align: center; /* Menyusun nilai checkbox di tengah */
    }

    .checkbox-inline input {
        margin-right: 10px; /* Jarak antar checkbox */
    }


/* Basic Styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

/* Container */
.container {
    width: 80%;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

/* Form Styling */
form {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

label {
    font-size: 16px;
    color: #555;
}

select, input[type="submit"] {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Table Styling */
table {
    width: 100%;
    margin-top: 20px;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
    color: #333;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Responsiveness */
@media (max-width: 768px) {
    .container {
        width: 95%;
    }
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabel</title>
    <style>
        /* Basic Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        /* Container */
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        /* Table Styling */
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }
        }
    </style>

<?php

// Simulasi data aktivitas EDM (ini bisa diganti dengan data sebenarnya)
$edm_activities = [
    'EDM01' => ['Statement 1', 'Statement 2', 'Statement 3'],
    'EDM02' => ['Statement 1', 'Statement 2', 'Statement 3'],
    'EDM03' => ['Statement 1', 'Statement 2', 'Statement 3'],
];

// Proses input dari form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['save'])) {
        // Simpan jawaban user ke session
        foreach ($edm_activities as $activity => $statements) {
            foreach ($statements as $index => $statement) {
                $input_name = $activity . '_' . $index;
                if (isset($_POST[$input_name])) {
                    $_SESSION['answers'][$activity][$index] = intval($_POST[$input_name]);
                }
            }
        }
    } elseif (isset($_POST['reset'])) {
        unset($_SESSION['answers']);
    }
}

// Fungsi untuk menghitung rata-rata skor
function calculateAverageScore($answers) {
    $total = array_sum($answers);
    $count = count($answers);
    return $count > 0 ? $total / $count : 0;
}

// Fungsi untuk menjelaskan skor berdasarkan rata-rata
function getScoreExplanation($averageScore) {
    if ($averageScore >= 4.0) {
        return "Optimized";
    } elseif ($averageScore >= 3.0) {
        return "Established";
    } elseif ($averageScore >= 2.0) {
        return "Managed";
    } elseif ($averageScore >= 1.0) {
        return "Performed";
    } else {
        return "Incomplete";
    }
}

// Menyimpan hasil perhitungan rata-rata skor dan gap untuk setiap aktivitas
$average_scores = [];
$gap_score = [];
$total_score = [];
$max_score = 5; // Skor maksimal per aktivitas
$desired_score = 5; // Skor yang diinginkan

foreach ($edm_activities as $activity => $statements) {
    if (isset($_SESSION['answers'][$activity])) {
        $average_scores[$activity] = calculateAverageScore($_SESSION['answers'][$activity]);
        $gap_score[$activity] = $desired_score - $average_scores[$activity]; // Gap = (desired) - (actual)
        $total_score[$activity] = array_sum($_SESSION['answers'][$activity]);
    } else {
        $average_scores[$activity] = 0;
        $gap_score[$activity] = $desired_score; // Jika tidak ada jawaban, gap maksimal
        $total_score[$activity] = 0;
    }
}
?>

<!-- HTML untuk menampilkan grafik dan form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit EDM</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

    <script>
        // Mengambil data PHP dan mengubahnya menjadi array JavaScript
        var activityLabels = <?php echo json_encode(array_keys($edm_activities)); ?>;
        var averageScores = <?php echo json_encode(array_values($average_scores)); ?>;
        var gapScores = <?php echo json_encode(array_values($gap_score)); ?>;

        // Membuat chart menggunakan Chart.js
        var ctx = document.getElementById('activityChart').getContext('2d');
        var activityChart = new Chart(ctx, {
            type: 'bar', // Jenis chart: bar chart
            data: {
                labels: activityLabels, // Label untuk setiap aktivitas
                datasets: [{
                    label: 'Rata-rata Skor',
                    data: averageScores, // Data untuk rata-rata skor
                    backgroundColor: 'rgba(54, 162, 235, 0.6)', // Warna bar untuk rata-rata skor
                    borderColor: 'rgba(54, 162, 235, 1)', // Warna border untuk rata-rata skor
                    borderWidth: 1
                }, {
                    label: 'Kesenjangan (Gap)',
                    data: gapScores, // Data untuk kesenjangan (gap)
                    backgroundColor: 'rgba(255, 99, 132, 0.6)', // Warna bar untuk kesenjangan
                    borderColor: 'rgba(255, 99, 132, 1)', // Warna border untuk kesenjangan
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>

<a href="download.php" target="_blank"><button>Download PDF</button></a>
