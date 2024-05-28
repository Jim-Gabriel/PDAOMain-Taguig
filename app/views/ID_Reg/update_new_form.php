<form method="post" action="<?php echo ROOT_URL. "/IDReg/save"; ?>" no-validate>

<div class="container p-3 rounded-4  bg-white " id="personalInfoSection">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="text-left ps-4 text-center pt-3"><?php echo $data['Title']; ?></h3>
                                <h5 class="text-left fst-italic text-black-50 text-center font-weight-bold ps-4">
                                <?php echo $data['subTitle']; ?></h5>

                                <br />

                                <div class="container">
                                    <div class="row">
                                        
                                            <h4>BUONG PANGALAN (FULL NAME):</h4>
                                            <div class="col-md-3">
                                                <label for="apilyedo" class="form-label fw-bold">Apilyedo</label>
                                                <label for="surname" class="form-label fst-italic">(Surname):</label>
                                                <input type="text" class="form-control" name="surname" id="surname"
                                                    aria-describedby="surnameHelp" placeholder="ex. Dela Cruz" required>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="pangalan" class="form-label fw-bold">Pangalan</label>
                                                <label for="name" class="form-label fst-italic">(Name):</label>
                                                <input type="text" class="form-control" name="name" id="name"
                                                    aria-describedby="nameHelp" placeholder="ex. Juan" value="<?php echo !empty($data['firstName'])?  $data['firstName'] : '' ?>" required>
                                                
                                            </div>

                                            <div class="col-md-3">
                                                <label for="gitnangPangalan" class="form-labe fw-bold">Gitnang
                                                    Pangalan</label>
                                                <label for="middleName" class="form-label fst-italic">(Middle
                                                    Name):</label>
                                                <input type="text" class="form-control" name="middlename" id="middleName"
                                                    aria-describedby="middleNameHelp" placeholder="ex. Miguel">
                                            </div>

                                            <div class="col-md-2 mb-4">
                                                <label for="pangalangDugtong" class="form-label fw-bold">Pangalang
                                                    Dugtong </label>
                                                <label for="nameExtension" class="form-label fst-italic">(Name
                                                    Extention):</label>
                                                <input type="text" class="form-control" name="nameExtention" id="nameExtension"
                                                    aria-describedby="nameExtensionHelp"
                                                    placeholder="ex. Jr. Sr. II, III">
                                            </div>



                                            <!-- TIRAHAN (ADDRESS) -->
                                            <h4>TIRAHAN (ADDRESS)</h4>
                                            <div class="col-md-6">
                                                <label for="houseNumber" class="form-label fw-bold">House
                                                    #/Block/Lot:</label>
                                                <input type="text" class="form-control" name="houseNumber" id="houseNumber"
                                                    aria-describedby="houseNumberHelp" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="street" class="form-label fw-bold">Street:</label>
                                                <input type="text" class="form-control" id="street" name="street"
                                                    aria-describedby="streetHelp" required>
                                            </div>
                                            <div class="col-md-4 mt-2">
                                                <label for="subdivision"
                                                    class="form-label fw-bold">Subdivision/Village:</label>
                                                <input type="text" class="form-control" id="subdivision" name="subdivision"
                                                    aria-describedby="subdivisionHelp">
                                            </div>

                                            <div class="col-md-4 mt-2">
                                                <label for="barangay" class="form-label fw-bold">Barangay:</label>
                                                <select class="form-select" id="barangay" name="barangay"
                                                    aria-describedby="barangayHelp" required>
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
                                                <input type="text" class="form-control" name="city" id="city"
                                                    aria-describedby="cityHelp" value="Taguig City" disabled>
                                            </div>


                                            <h4 class="mt-5">IBANG IMPORMASYON (OTHER INFORMATION):</h4>
                                            <div class="col-md-4">
                                                <label for="uriNgKapansan" class="form-label fw-bold">Uri ng Kapansanan
                                                </label>
                                                <label for="disability" class="form-label fst-italic">(Type of
                                                    Disability):</label>
                                                <input type="text" class="form-control" name="disability" id="disability"
                                                    aria-describedby="disabilityHelp"
                                                    placeholder="ex. Visual Impairment" required>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="numeroNgKontak" class="form-label fw-bold">Numero ng
                                                    Kontak</label>
                                                <label for="contactNumber" class="form-label fst-italic">(Contact
                                                    Number):</label>
                                                <input type="tel" class="form-control" name="contactNumber" id="contactNumber"
                                                    aria-describedby="contactNumberHelp" placeholder="ex. 09123456789" required>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="petsaNgKapanganakan" class="form-label fw-bold">Petsa ng
                                                    Kapanganakan</label>
                                                <label for="dateOfBirth" class="form-label fst-italic">(Date of
                                                    Birth):</label>
                                                <input type="date" class="form-control" name="dateOfBirth" id="dob"
                                                    aria-describedby="dobHelp" required>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="kasarian" class="form-label fw-bold">Kasarian </label>
                                                <label for="gender" class="form-label fst-italic">(Gender):</label>
                                                <select class="form-select" name="gender" id="gender" aria-describedby="genderHelp" required>
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
                                                <select class="form-select" name="bloodType" id="bloodType"
                                                    aria-describedby="bloodTypeHelp" required>
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
                                        
                                            <div class="col-md-6">
                                                <label for="pangalan" class="form-label fw-bold">Pangalan</label>
                                                <label for="name" class="form-label fst-italic">(Name):</label>
                                                <input type="text" class="form-control" name="fullName" id="surname"
                                                    aria-describedby="surnameHelp" placeholder="ex. Juan Dela Cruz" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="numeroNgKontak" class="form-label fw-bold">Numero ng
                                                    Kontak</label>
                                                <label for="contactNumber" class="form-label fst-italic">(Contact
                                                    Number):</label>
                                                <input type="tel" class="form-control" name="emer_contactNumber" id="contactNumber"
                                                    aria-describedby="contactNumberHelp" placeholder="ex. 09123456789" required>
                                            </div>

                                            <div class="col-md-6">
                                                <label for="relasyon" class="form-label fw-bold">Relasyon sa
                                                    Aplikante</label>
                                                <label for="relationship" class="form-label fst-italic">(Relationship to
                                                    the Applicant):</label>
                                                <input type="text" class="form-control" name="relationship" id="surname"
                                                    aria-describedby="surnameHelp"
                                                    placeholder="ex. Magulang, Kapatid, Asawa" required>
                                            </div>

                                            <div class="col-md-12">
                                                <label for="rekomendasyon"
                                                    class="form-label fw-bold">Rekomendasyon</label>
                                                <label for="recommendation"
                                                    class="form-label fst-italic">(Recommendation):</label>
                                                <input type="text" class="form-control" name="recommendation" id="surname"
                                                    aria-describedby="surnameHelp">
                                            </div>

                                            <div class="mt-5 button-container text-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <button class="no-consent-button fs-5">Bumalik (Go
                                                            back)</button>
                                                        <button type="submit" class="btn btn-danger continue-button fs-5">Magpatuloy
                                                            (Continue)</button>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
</form>