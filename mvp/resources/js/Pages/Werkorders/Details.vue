<template>
    <div>
        <Layout>
            <Head>
                <title>Werkorder {{ id }}</title>
            </Head>

            <div class="btn-group mt-3" role="group" style="margin-left: 5%;">
                <button @click="currentView = 'factuur'" :class="[currentView === 'factuur' ? activeClass : '']"
                        type="button" class="btn btn-outline-primary fnt09">Factuur</button>
                <button @click="currentView = 'factuur+factuurregels'" :class="[currentView === 'factuur+factuurregels' ? activeClass : '']"
                        type="button" class="btn btn-outline-primary fnt09">Factuurregels</button>
                <button @click="currentView = 'factuur+opmerkingen'" :class="[currentView === 'factuur+opmerkingen' ? activeClass : '']"
                        type="button" class="btn btn-outline-primary fnt09">Opmerkingen</button>
            </div>


            <div v-if="currentView === 'factuur'" class="column" style="width:60%;margin-left:20%;margin-right:20%;">
                <h2 class="mx-5 mt-4">Werkorder {{ id }}</h2>
            </div>

            <div v-if="currentView === 'factuur+factuurregels'">
                <div class="column" style="width:45%;margin-left:5%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Werkorder {{ id }}</h2>
                </div>
                <div class="column" style="width:40%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Factuurregels</h2>
                </div>
            </div>

            <div v-if="currentView === 'factuur+opmerkingen'">
                <div class="column" style="width:45%;margin-left:5%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Werkorder {{ id }}</h2>
                </div>
                <div class="column" style="width:40%;margin-right:5%;">
                    <h2 class="mx-5 mt-4">Opmerkingen</h2>
                    <ul class="nav nav-pills mb-1 mx-3 mt-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-banden-tab" data-bs-toggle="pill" data-bs-target="#pills-banden" type="button" role="tab" aria-controls="pills-banden" aria-selected="true">Banden</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-uitlaat-tab" data-bs-toggle="pill" data-bs-target="#pills-uitlaat" type="button" role="tab" aria-controls="pills-uitlaat" aria-selected="false">Uitlaat</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-verlichting-tab" data-bs-toggle="pill" data-bs-target="#pills-verlichting" type="button" role="tab" aria-controls="pills-verlichting" aria-selected="false">Verlichting</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-roestschade-tab" data-bs-toggle="pill" data-bs-target="#pills-roestschade" type="button" role="tab" aria-controls="pills-roestschade" aria-selected="false">Roestschade</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-aandrijving-tab" data-bs-toggle="pill" data-bs-target="#pills-aandrijving" type="button" role="tab" aria-controls="pills-aandrijving" aria-selected="false">Aandrijving</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-ophanging-tab" data-bs-toggle="pill" data-bs-target="#pills-ophanging" type="button" role="tab" aria-controls="pills-ophanging" aria-selected="false">Ophanging</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-remmen-tab" data-bs-toggle="pill" data-bs-target="#pills-remmen" type="button" role="tab" aria-controls="pills-remmen" aria-selected="false">Remmen</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-carrosserie-tab" data-bs-toggle="pill" data-bs-target="#pills-carrosserie" type="button" role="tab" aria-controls="pills-carrosserie" aria-selected="false">Carrosserie</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-diversen-tab" data-bs-toggle="pill" data-bs-target="#pills-diversen" type="button" role="tab" aria-controls="pills-diversen" aria-selected="false">Diversen</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-adviezen-tab" data-bs-toggle="pill" data-bs-target="#pills-adviezen" type="button" role="tab" aria-controls="pills-adviezen" aria-selected="false">Adviezen</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane show active" id="pills-banden" role="tabpanel" aria-labelledby="pills-banden-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center" aria-current="true">
                                        Wiel/velg ondeugdelijk
                                        <button class="btn-danger btn badge bg-danger rounded-pill">-</button>
                                    </li>
                                    <li class="list-group-item list-group-item-success d-flex justify-content-between align-items-center">
                                        Band L.V. verv.
                                        <button class="btn-danger btn badge bg-danger rounded-pill">-</button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-centers">
                                        Band R.V. verv.
                                        <button class="btn-success btn badge bg-success rounded-pill">+</button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Band L.A. verv.
                                        <button class="btn-success btn badge bg-success rounded-pill">+</button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Band R.A. verv.
                                        <button class="btn-success btn badge bg-success rounded-pill">+</button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Draairichting L.V. band
                                        <button class="btn-success btn badge bg-success rounded-pill">+</button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Draairichting R.V. band
                                        <button class="btn-success btn badge bg-success rounded-pill">+</button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Draairichting L.A. band
                                        <button class="btn-success btn badge bg-success rounded-pill">+</button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Draairichting R.A. band
                                        <button class="btn-success btn badge bg-success rounded-pill">+</button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Band L.V. spijker/canvasbreuk/poreus
                                        <button class="btn-success btn badge bg-success rounded-pill">+</button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Band R.V. spijker/canvasbreuk/poreus
                                        <button class="btn-success btn badge bg-success rounded-pill">+</button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Band L.A. spijker/canvasbreuk/poreus
                                        <button class="btn-success btn badge bg-success rounded-pill">+</button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Band R.A. spijker/canvasbreuk/poreus
                                        <button class="btn-success btn badge bg-success rounded-pill">+</button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Bandenspanning te laag/controleren
                                        <button class="btn-success btn badge bg-success rounded-pill">+</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-uitlaat" role="tabpanel" aria-labelledby="pills-uitlaat-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Brandstof lekkage
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Tankdop ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Tankband ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        LPG installatie ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Gasdop ontbreekt
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Uitlaatsysteem niet gasdicht
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        CO gehalte te hoog
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        EOBD niet volgens voorschrift
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Roetmeting te hoog
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Uitlaat ophanging ondeugdelijk
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-verlichting" role="tabpanel" aria-labelledby="pills-verlichting-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Koplamp L. defect/ondeugdelijk/beeld
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Koplamp R. defect/ondeugdelijk/beeld
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Achterlicht L. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Achterlicht R. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stadslicht L. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stadslicht R. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remlicht L. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remlicht R. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Achteruitrijlicht L. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Achteruitrijlicht R. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Mistlicht defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        R.A.W. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Hoogte stelling koplamp defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Koplamp afstelling
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Accu zit los
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Bedrading ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Kenteken verlichting defect / ondeugdelijk
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-roestschade" role="tabpanel" aria-labelledby="pills-roestschade-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Binnendorpel L. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Binnendorpel R. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Buitendorpel L. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Buitendorpel R. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Veerschotel roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Chassisbalk roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Bodemplaat roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Frontbalk roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Subframe V. roestschade / ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Subframe A. roestschade / ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wielkuip L.V. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wielkuip R.V. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wielkuip L.A. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wielkuip R.A. roestschade (lassen 70%)
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-aandrijving" role="tabpanel" aria-labelledby="pills-aandrijving-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Aandrijving ondeugdelijk bevestigd
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Aandrijfashoes L.V. verv.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Aandrijfashoes R.V. verv.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Aandrijfashoes L.A. verv.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Aandrijfashoes R.A. verv.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Fuseekogelhoes L.V. verv.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Fuseekogelhoes R.V. verv.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Fuseekogel L.V. speling (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Fuseekogel R.V. speling (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stuurkogel L. speling (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stuurkogel R. speling (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stuurkogelhoes L. verv.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stuurkogelhoes R. verv.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stuurhuishoes L. verv.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stuurhuishoes R. verv.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wiellager L.V. hoorbaar/speling (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wiellager R.V. hoorbaar/speling (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wiellager L.A. hoorbaar/speling (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wiellager R.A. hoorbaar/speling (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stuurkolom speling
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-ophanging" role="tabpanel" aria-labelledby="pills-ophanging-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Draagarm L.V. speling/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Draagarm R.V. speling/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Draagarm L.A. speling/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Draagarm R.A. speling/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stabilisatorstang/rubber L.V. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stabilisatorstang/rubber R.V. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stabilisatorstang/rubber L.A. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stabilisatorstang/rubber R.A. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Spiraalveer L.V. gebroken/gescheurd/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Spiraalveer R.V. gebroken/gescheurd/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Spiraalveer L.A. gebroken/gescheurd/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Spiraalveer R.A. gebroken/gescheurd/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Veerschotel L.V. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Veerschotel R.V. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Veerschotel L.A. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Veerschotel R.A. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Schokbreker L.V. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Schokbreker R.V. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Schokbreker L.A. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Schokbreker R.A. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stuurhuis vertoont lekkage
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Stuurbekrachtiging ondeugdelijk
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-remmen" role="tabpanel" aria-labelledby="pills-remmen-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remverschil V.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remverschil A.
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remschijven V. vervangen
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remschijven A. vervangen
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remsysteem vertoont lekkage
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remdrukbegrenzer zit vast/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remslang L.V. misvormt/beschadigd
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remslang R.V. misvormt/beschadigd
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remslang L.A. misvormt/beschadigd
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remslang R.A. misvormt/beschadigd
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Handremkabel ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Handrem werkt onvoldoende
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wiel L.V. loopt zwaar (remmen)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wiel R.V. loopt zwaar (remmen)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wiel L.A. loopt zwaar (remmen)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Wiel R.A. loopt zwaar (remmen)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        ABS systeem ondeugdelijk (lamp/werking)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remleidingen geheel ontroesten en tectyleren (putcorrosie)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remleidingen vervangen (putcorrosie)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remschijven roest
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remvloeistof niveau te laag
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remblokken A. vervangen
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Remblokken V. vervangen
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Voetrem  / handrem L.A. werkt niet
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Voetrem  / handrem R.A. werkt niet
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-carrosserie" role="tabpanel" aria-labelledby="pills-carrosserie-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Portier ondeugdelijk (slot/werking)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Achterklep ondeugdelijk (slot/werking)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Voorruit vervangen
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Ruitenwissers vervangen
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Ruitensproeier defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Ventilator/aanjager defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Spiegels beschadigd/ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Zitplaats ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Gordel L.V. ondeugdelijk/beschadigd (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Gordel R.V. ondeugdelijk/beschadigd (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Gordel L.A. ondeugdelijk/beschadigd (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Gordel R.A. ondeugdelijk/beschadigd (verv.)
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Voorbumper zit los/ondeugdlijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Achterbumper zit los/ondeugdelijk
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-diversen" role="tabpanel" aria-labelledby="pills-diversen-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Kentekenplaat V. ondeugdelijk/onleesbaar/beschadigd
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Kentekenplaat A. ondeugdelijk/onleesbaar/beschadigd
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Motorsteun ondeugdelijk
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Claxon defect/ondeugdelijk
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-adviezen" role="tabpanel" aria-labelledby="pills-adviezen-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        AC1 banden
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        AC2 schokbrekers
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        AC3 roestschade
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        AC4 speling kogels
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        AC5 remmen
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        RA1 airbag
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        RA2 olielekkage
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </Layout>
    </div>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue3'
import Layout from '../../Layout/Default.vue'


export default {
    data(){
        return {
            currentView: 'factuur',
            activeClass: 'active-submenu',
        }
    },
    components: {
        Layout,
        Link,
        Head,
    },
    props: {
        id: String
    }
}
</script>

<style scoped>
.fnt09 {
    font-size: 0.9rem!important;
}

.column {
    display:inline-block;
    margin-top: 1rem;
    background-color: #f2f2f2;
    border-radius: 0.5rem;
    vertical-align: top;
    font-size: 0.9rem!important;
    margin-bottom: 2rem;
    max-height:80vh;
}

.active-submenu {
    background-color: #0d6efd;
    color: white;
}

.list-group-container {
    height: 32rem;
    max-height:70%;
    overflow: scroll;
}

</style>
