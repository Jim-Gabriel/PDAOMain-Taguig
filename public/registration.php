<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/registration.css">
    <link rel="stylesheet" href="assets/plugins/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-eiP+xyip0wgeVgc1PYReLE9LFgYpZjToULY7V2z3kTaP2iAi/MjGCz6FvWVRfGLd" crossorigin="anonymous">
    <link rel="icon" href="assets/images/pdao_logo.png">
    <title>PDAO TAGUIG REGISTRATION</title>
</head>

<body>

    <div class="container w-60 container-bg mt-5 rounded-top-4 shadow">
        <div class="row align-items-center">
            <div class="col-4 d-flex justify-content-end">
                <div class="pt-4 pb-4">
                    <img class="img-fluid" src="assets/images/pdao_logo.png" alt="Logo Image" style="max-width: 150px;">
                </div>
            </div>
            <div class="col-4 text-white text-center">
                <div class="pt-4 pb-4">
                    <h1 class="header-text fw-semibold">PDAO TAGUIG REGISTRATION</h1>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pt-4 pb-4">
                    <img class="img-fluid" src="assets/images/taguig_seal.png" alt="Logo Image"
                        style="max-width: 150px;">
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12 custom-bg-line-1">
            </div>
        </div>
    </div>


    <div class="container custom-bg-2 rounded-bottom-4 shadow">
        <div class="row">
            <div class="col-12">
                <div class="p-sm-3 data_privacy">
                    <h2 class="fw-bold text-center pt-3">Application Form para sa ID Card na may Diskwento</h2>
                    <h4 class="fst-italic text-black-50 text-center">Application form of ID Card for Discount</h4>
                    <br />
                    <h3 class="text-center">(0-59 Taong Gulang Lamang)</h3>
                    <h5 class="fst-italic text-black-50 text-center">0-59 years old only</h5>
                    <br />
                    <div class="container p-3 rounded-4 bg-white" id="chooseIfYouAreSection">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-left ps-4 text-center">Pumili kung ikaw ay:</h3>
                                <h5 class="text-left fst-italic text-black-50 text-center font-weight-bold ps-4">Choose
                                    if you are:</h5>

                                <br />

                                <div class="form-check1 ps-5">
                                    <input class="form-check-input" type="radio" name="applicantType"
                                        id="newApplicant" value="newApplicantRadio">
                                    <label class="form-check-label h5" for="newApplicantRadio">
                                        BAGONG APLIKANTE
                                    </label>
                                    <p class="fst-italic text-black-75 ps-4">New Applicant</p>
                                </div>
                                <br />

                                <div class="form-check2 ps-5">
                                    <input class="form-check-input" type="radio" name="applicantType"
                                        id="changeAddress" value="changeAddressRadio">
                                    <label class="form-check-label h5" for="changeAddressRadio">
                                        PAGBABAGO NG TIRAHAN
                                    </label>
                                    <p class="fst-italic text-black-75 ps-4">Change of Address</p>
                                </div>
                                <br />

                                <div class="form-check3 ps-5">
                                    <input class="form-check-input" type="radio" name="applicantType"
                                        id="lostID" value="lostIDRadio">
                                    <label class="form-check-label h5" for="lostIDRadio">
                                        NAWAWALANG KARD NG PAGKAKAKILANLAN
                                    </label>
                                    <p class="fst-italic text-black-75 ps-4">Lost ID</p>
                                </div>
                                <br />

                                <div class="form-check4 ps-5">
                                    <input class="form-check-input" type="radio" name="applicantType"
                                        id="renewal" value="renewalRadio">
                                    <label class="form-check-label h5" for="renewalRadio">
                                        PAGPAPANIBAGO
                                    </label>
                                    <p class="fst-italic text-black-75 ps-4">Renewal</p>
                                </div>
                                <br />

                                <div class="form-check5 ps-5">
                                    <input class="form-check-input" type="radio" name="applicantType"
                                        id="changeSurname" value="changeSurnameRadio">
                                    <label class="form-check-label h5" for="changeSurnameRadio">
                                        PAGBABAGO NG APILYEDO
                                    </label>
                                    <p class="fst-italic text-black-75 ps-4">Change Surname for a Married Woman</p>
                                </div>
                                <br />
                                <div class="mt-5 button-container text-center">
                                    <button class="continue-button mx-auto fs-5">Magpatuloy
                                        (Continue)</button>
                                </div>
                            </div>
                        </div>

                    </div>








                    <div class="container p-3 rounded-4  bg-white mt-3" id="personalInfoSection">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-left ps-4 text-center pt-3">Bagong Aplikante</h3>
                                <h5 class="text-left fst-italic text-black-50 text-center font-weight-bold ps-4">
                                    New Applicant</h5>

                                <br />

                                <div class="container">
                                    <div class="row">
                                        <form class="row g-3 align-items-center">
                                            <h4>BUONG PANGALAN (FULL NAME):</h4>
                                            <div class="col-md-3">
                                                <label for="apilyedo" class="form-label fw-bold">Apilyedo</label>
                                                <label for="surname" class="form-label fst-italic">(Surname):</label>
                                                <input type="text" class="form-control" id="surname"
                                                    aria-describedby="surnameHelp" placeholder="ex. Dela Cruz">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="pangalan" class="form-label fw-bold">Pangalan</label>
                                                <label for="name" class="form-label fst-italic">(Name):</label>
                                                <input type="text" class="form-control" id="name"
                                                    aria-describedby="nameHelp" placeholder="ex. Juan">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="gitnangPangalan" class="form-labe fw-bold">Gitnang
                                                    Pangalan</label>
                                                <label for="middleName" class="form-label fst-italic">(Middle
                                                    Name):</label>
                                                <input type="text" class="form-control" id="middleName"
                                                    aria-describedby="middleNameHelp" placeholder="ex. Miguel">
                                            </div>

                                            <div class="col-md-2 mb-4">
                                                <label for="pangalangDugtong" class="form-label fw-bold">Pangalang
                                                    Dugtong </label>
                                                <label for="nameExtension" class="form-label fst-italic">(Name
                                                    Extention):</label>
                                                <input type="text" class="form-control" id="nameExtension"
                                                    aria-describedby="nameExtensionHelp"
                                                    placeholder="ex. Jr. Sr. II, III">
                                            </div>



                                            <!-- TIRAHAN (ADDRESS) -->
                                            <h4>TIRAHAN (ADDRESS):</h4>
                                            <div class="col-md-6">
                                                <label for="houseNumber" class="form-label fw-bold">House
                                                    #/Block/Lot:</label>
                                                <input type="text" class="form-control" id="houseNumber"
                                                    aria-describedby="houseNumberHelp">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="street" class="form-label fw-bold">Street:</label>
                                                <input type="text" class="form-control" id="street"
                                                    aria-describedby="streetHelp">
                                            </div>
                                            <div class="col-md-4 mt-2">
                                                <label for="subdivision"
                                                    class="form-label fw-bold">Subdivision/Village:</label>
                                                <input type="text" class="form-control" id="subdivision"
                                                    aria-describedby="subdivisionHelp">
                                            </div>

                                            <div class="col-md-4 mt-2">
                                                <label for="barangay" class="form-label fw-bold">Barangay:</label>
                                                <select class="form-select" id="barangay"
                                                    aria-describedby="barangayHelp">
                                                    <option selected disabled>Pumili ng Barangay</option>
                                                    <option value="Bagumbayan">Bagumbayan</option>
                                                    <option value="Bambang">Bambang</option>
                                                    <option value="Calzada">Calzada-Tipas</option>
                                                    <option value="Cembo">Cembo</option>
                                                    <option value="Central Bicutan">Central Bicutan</option>
                                                    <option value="Central Signal Village">Central Signal Village
                                                    </option>
                                                    <option value="Comembo">Comembo</option>
                                                    <option value="East Rembo">East Rembo</option>
                                                    <option value="Fort Bonifacio">Fort Bonifacio</option>
                                                    <option value="Hagonoy">Hagonoy</option>
                                                    <option value="Ibayo-Tipas">Ibayo-Tipas</option>
                                                    <option value="Katuparan">Katuparan</option>
                                                    <option value="Ligid-Tipas">Ligid-Tipas</option>
                                                    <option value="Lower Bicutan">Lower Bicutan</option>
                                                    <option value="Maharlika Village">Maharlika Village</option>
                                                    <option value="Napindan">Napindan</option>
                                                    <option value="New Lower Bicutan">New Lower Bicutan</option>
                                                    <option value="North Daang Hari">North Daang Hari</option>
                                                    <option value="North Signal Village">North Signal Village</option>
                                                    <option value="Palingon-Tipas">Palingon-Tipas</option>
                                                    <option value="Pembo">Pembo</option>
                                                    <option value="Pinagsama">Pinagsama</option>
                                                    <option value="Pitogo">Pitogo</option>
                                                    <option value="Post Proper Northsid">Post Proper Northside</option>
                                                    <option value="Post Proper Southside">Post Proper Southside</option>
                                                    <option value="Rizal">Rizal</option>
                                                    <option value="San Miguel">San Miguel</option>
                                                    <option value="Santa Ana">Santa Ana</option>
                                                    <option value="South Cembo">South Cembo</option>
                                                    <option value="South Daang Hari">South Daang Hari</option>
                                                    <option value="South Signal Village">South Signal Village</option>
                                                    <option value="Tanyag">Tanyag</option>
                                                    <option value="Tuktukan">Tuktukan</option>
                                                    <option value="Upper Bicutan">Upper Bicutan</option>
                                                    <option value="Ususa">Ususan</option>
                                                    <option value="Wawa">Wawa</option>
                                                    <option value="West Rembo">West Rembo</option>
                                                    <option value="Western Bicutan">Western Bicutan</option>


                                                </select>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mt-2">
                                                <label for="lungsod" class="form-label fw-bold">Lungsod</label>
                                                <label for="city" class="form-label fst-italic">(City):</label>
                                                <input type="text" class="form-control" id="city"
                                                    aria-describedby="cityHelp" value="Taguig City" disabled>
                                            </div>


                                            <h4 class="mt-5">IBANG IMPORMASYON (OTHER INFORMATION):</h4>
                                            <div class="col-md-4">
                                                <label for="uriNgKapansan" class="form-label fw-bold">Uri ng Kapansanan
                                                </label>
                                                <label for="disability" class="form-label fst-italic">(Type of
                                                    Disability):</label>
                                                <input type="text" class="form-control" id="disability"
                                                    aria-describedby="disabilityHelp"
                                                    placeholder="ex. Visual Impairment">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="numeroNgKontak" class="form-label fw-bold">Numero ng
                                                    Kontak</label>
                                                <label for="contactNumber" class="form-label fst-italic">(Contact
                                                    Number):</label>
                                                <input type="tel" class="form-control" id="contactNumber"
                                                    aria-describedby="contactNumberHelp" placeholder="ex. 09123456789">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="petsaNgKapanganakan" class="form-label fw-bold">Petsa ng
                                                    Kapanganakan</label>
                                                <label for="dateOfBirth" class="form-label fst-italic">(Date of
                                                    Birth):</label>
                                                <input type="date" class="form-control" id="dob"
                                                    aria-describedby="dobHelp">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="kasarian" class="form-label fw-bold">Kasarian </label>
                                                <label for="gender" class="form-label fst-italic">(Gender):</label>
                                                <select class="form-select" id="gender" aria-describedby="genderHelp">
                                                    <option selected disabled>Pumili ng Kasarian</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="uriNgDugo" class="form-label fw-bold">Uri ng Dugo</label>
                                                <label for="bloodType" class="form-label fst-italic">(Blood
                                                    Type):</label>
                                                <select class="form-select" id="bloodType"
                                                    aria-describedby="bloodTypeHelp">
                                                    <option class="text-black-50" selected disabled>Pumili ng Uri ng
                                                        Dugo</option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>










                    <div class="container p-3 rounded-4  bg-white mt-3" id="changeAddressSection">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-left ps-4 text-center pt-3">Pagbabago ng Tirahan</h3>
                                <h5 class="text-left fst-italic text-black-50 text-center font-weight-bold ps-4">
                                    Change of Address</h5>

                                <br />

                                <div class="container">
                                    <div class="row">
                                        <form class="row g-3 align-items-center">

                                            <!-- TIRAHAN (ADDRESS) -->

                                            <div class="col-md-6">
                                                <label for="houseNumber" class="form-label fw-bold">House
                                                    #/Block/Lot:</label>
                                                <input type="text" class="form-control" id="houseNumber"
                                                    aria-describedby="houseNumberHelp">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="street" class="form-label fw-bold">Street:</label>
                                                <input type="text" class="form-control" id="street"
                                                    aria-describedby="streetHelp">
                                            </div>
                                            <div class="col-md-4 mt-2">
                                                <label for="subdivision"
                                                    class="form-label fw-bold">Subdivision/Village:</label>
                                                <input type="text" class="form-control" id="subdivision"
                                                    aria-describedby="subdivisionHelp">
                                            </div>

                                            <div class="col-md-4 mt-2">
                                                <label for="barangay" class="form-label fw-bold">Barangay:</label>
                                                <select class="form-select" id="barangay"
                                                    aria-describedby="barangayHelp">
                                                    <option selected disabled>Pumili ng Barangay</option>
                                                    <option value="Bagumbayan">Bagumbayan</option>
                                                    <option value="Bambang">Bambang</option>
                                                    <option value="Calzada">Calzada-Tipas</option>
                                                    <option value="Cembo">Cembo</option>
                                                    <option value="Central Bicutan">Central Bicutan</option>
                                                    <option value="Central Signal Village">Central Signal Village
                                                    </option>
                                                    <option value="Comembo">Comembo</option>
                                                    <option value="East Rembo">East Rembo</option>
                                                    <option value="Fort Bonifacio">Fort Bonifacio</option>
                                                    <option value="Hagonoy">Hagonoy</option>
                                                    <option value="Ibayo-Tipas">Ibayo-Tipas</option>
                                                    <option value="Katuparan">Katuparan</option>
                                                    <option value="Ligid-Tipas">Ligid-Tipas</option>
                                                    <option value="Lower Bicutan">Lower Bicutan</option>
                                                    <option value="Maharlika Village">Maharlika Village</option>
                                                    <option value="Napindan">Napindan</option>
                                                    <option value="New Lower Bicutan">New Lower Bicutan</option>
                                                    <option value="North Daang Hari">North Daang Hari</option>
                                                    <option value="North Signal Village">North Signal Village</option>
                                                    <option value="Palingon-Tipas">Palingon-Tipas</option>
                                                    <option value="Pembo">Pembo</option>
                                                    <option value="Pinagsama">Pinagsama</option>
                                                    <option value="Pitogo">Pitogo</option>
                                                    <option value="Post Proper Northsid">Post Proper Northside</option>
                                                    <option value="Post Proper Southside">Post Proper Southside</option>
                                                    <option value="Rizal">Rizal</option>
                                                    <option value="San Miguel">San Miguel</option>
                                                    <option value="Santa Ana">Santa Ana</option>
                                                    <option value="South Cembo">South Cembo</option>
                                                    <option value="South Daang Hari">South Daang Hari</option>
                                                    <option value="South Signal Village">South Signal Village</option>
                                                    <option value="Tanyag">Tanyag</option>
                                                    <option value="Tuktukan">Tuktukan</option>
                                                    <option value="Upper Bicutan">Upper Bicutan</option>
                                                    <option value="Ususa">Ususan</option>
                                                    <option value="Wawa">Wawa</option>
                                                    <option value="West Rembo">West Rembo</option>
                                                    <option value="Western Bicutan">Western Bicutan</option>


                                                </select>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mt-2">
                                                <label for="lungsod" class="form-label fw-bold">Lungsod</label>
                                                <label for="city" class="form-label fst-italic">(City):</label>
                                                <input type="text" class="form-control" id="city"
                                                    aria-describedby="cityHelp" value="Taguig City" disabled>
                                            </div>


                                            <div class="mt-5 button-container text-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <button class="no-consent-button fs-5">Bumalik (Go
                                                            back)</button>
                                                        <button class="continue-button fs-5">Magpatuloy
                                                            (Continue)</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>










                    <div class="container p-3 rounded-4  bg-white mt-3" id="changeSurnameSection">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-left ps-4 text-center pt-3">Pagbabago ng Apelyido</h3>
                                <h5 class="text-left fst-italic text-black-50 text-center font-weight-bold ps-4">
                                    Personal Information</h5>

                                <br />

                                <div class="container">
                                    <div class="row">
                                        <form class="row g-3 align-items-center">
                                            <div class="col-md-3">
                                                <label for="apilyedo" class="form-label fw-bold">Apilyedo</label>
                                                <label for="surname" class="form-label fst-italic">(Surname):</label>
                                                <input type="text" class="form-control" id="surname"
                                                    aria-describedby="surnameHelp" placeholder="ex. Dela Cruz">
                                            </div>

                                            <div class="col-md-4">
                                                <label for="pangalan" class="form-label fw-bold">Pangalan</label>
                                                <label for="name" class="form-label fst-italic">(Name):</label>
                                                <input type="text" class="form-control" id="name"
                                                    aria-describedby="nameHelp" placeholder="ex. Juan">
                                            </div>

                                            <div class="col-md-3">
                                                <label for="gitnangPangalan" class="form-labe fw-bold">Gitnang
                                                    Pangalan</label>
                                                <label for="middleName" class="form-label fst-italic">(Middle
                                                    Name):</label>
                                                <input type="text" class="form-control" id="middleName"
                                                    aria-describedby="middleNameHelp" placeholder="ex. Miguel">
                                            </div>

                                            <div class="col-md-2 mb-4">
                                                <label for="pangalangDugtong" class="form-label fw-bold">Pangalang
                                                    Dugtong </label>
                                                <label for="nameExtension" class="form-label fst-italic">(Name
                                                    Extention):</label>
                                                <input type="text" class="form-control" id="nameExtension"
                                                    aria-describedby="nameExtensionHelp"
                                                    placeholder="ex. Jr. Sr. II, III">
                                            </div>


                                            <div class="mt-2 button-container text-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <button class="no-consent-button fs-5">Bumalik (Go
                                                            back)</button>
                                                        <button class="continue-button fs-5">Magpatuloy
                                                            (Continue)</button>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>












                    <div class="container p-3 rounded-4 bg-white mt-3" id="emergencyContactsSection">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-left ps-4 text-center pt-3">Kung may biglaang pangyayari, mangyaring
                                    tawagan si:</h3>
                                <h5 class="text-left fst-italic text-black-50 text-center font-weight-bold ps-4">
                                    (In case of Emergency, please contact)</h5>

                                <br />

                                <div class="container">
                                    <div class="row">
                                        <form class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label for="pangalan" class="form-label fw-bold">Pangalan</label>
                                                <label for="name" class="form-label fst-italic">(Name):</label>
                                                <input type="text" class="form-control" id="surname"
                                                    aria-describedby="surnameHelp" placeholder="ex. Juan Dela Cruz">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="numeroNgKontak" class="form-label fw-bold">Numero ng
                                                    Kontak</label>
                                                <label for="contactNumber" class="form-label fst-italic">(Contact
                                                    Number):</label>
                                                <input type="tel" class="form-control" id="contactNumber"
                                                    aria-describedby="contactNumberHelp" placeholder="ex. 09123456789">
                                            </div>

                                            <div class="col-md-6">
                                                <label for="relasyon" class="form-label fw-bold">Relasyon sa
                                                    Aplikante</label>
                                                <label for="relationship" class="form-label fst-italic">(Relationship to
                                                    the Applicant):</label>
                                                <input type="text" class="form-control" id="surname"
                                                    aria-describedby="surnameHelp"
                                                    placeholder="ex. Magulang, Kapatid, Asawa  ">
                                            </div>

                                            <div class="col-md-12">
                                                <label for="rekomendasyon"
                                                    class="form-label fw-bold">Rekomendasyon</label>
                                                <label for="recommendation"
                                                    class="form-label fst-italic">(Recommendation):</label>
                                                <input type="text" class="form-control" id="surname"
                                                    aria-describedby="surnameHelp">
                                            </div>

                                            <div class="mt-5 button-container text-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <button class="no-consent-button fs-5">Bumalik (Go
                                                            back)</button>
                                                        <button class="continue-button fs-5">Magpatuloy
                                                            (Continue)</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>





    <br />

    <footer class="container mt-5 footer-1">
    <div class="row contact-container">
        <div class="col-12 text-center contact-info">
            <p class="text-primary-100"> 2024 <br>
                Copyright © City Government of Taguig <br>
                Information Technology Office </p>
        </div>
    </div>
    
</footer>
<div>
        <img src="assets/images/bg/footer.png" class="img-fluid footer-img" alt="Footer Image">
    </div>

    <script src="assets/javascript/registration.js" defer></script>

</body>

</html>