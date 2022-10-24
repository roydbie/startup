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
                                    <li class="list-group-item list-group-item-success" aria-current="true">
                                        Wiel/velg ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item-success">
                                        Band L.V. verv.
                                    </li>
                                    <li class="list-group-item">
                                        Band R.V. verv.
                                    </li>
                                    <li class="list-group-item">
                                        Band L.A. verv.
                                    </li>
                                    <li class="list-group-item">
                                        Band R.A. verv.
                                    </li>
                                    <li class="list-group-item">
                                        Draairichting L.V. band
                                    </li>
                                    <li class="list-group-item">
                                        Draairichting R.V. band
                                    </li>
                                    <li class="list-group-item">
                                        Draairichting L.A. band
                                    </li>
                                    <li class="list-group-item">
                                        Draairichting R.A. band
                                    </li>
                                    <li class="list-group-item">
                                        Band L.V. spijker/canvasbreuk/poreus
                                    </li>
                                    <li class="list-group-item">
                                        Band R.V. spijker/canvasbreuk/poreus
                                    </li>
                                    <li class="list-group-item">
                                        Band L.A. spijker/canvasbreuk/poreus
                                    </li>
                                    <li class="list-group-item">
                                        Band R.A. spijker/canvasbreuk/poreus
                                    </li>
                                    <li class="list-group-item">
                                        Bandenspanning te laag/controleren
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-uitlaat" role="tabpanel" aria-labelledby="pills-uitlaat-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Brandstof lekkage
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Tankdop ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Tankband ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        LPG installatie ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Gasdop ontbreekt
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Uitlaatsysteem niet gasdicht
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        CO gehalte te hoog
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        EOBD niet volgens voorschrift
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Roetmeting te hoog
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Uitlaat ophanging ondeugdelijk
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-verlichting" role="tabpanel" aria-labelledby="pills-verlichting-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Koplamp L. defect/ondeugdelijk/beeld
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Koplamp R. defect/ondeugdelijk/beeld
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Achterlicht L. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Achterlicht R. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stadslicht L. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stadslicht R. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remlicht L. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remlicht R. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Achteruitrijlicht L. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Achteruitrijlicht R. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Mistlicht defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        R.A.W. defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Hoogte stelling koplamp defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Koplamp afstelling
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Accu zit los
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Bedrading ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Kenteken verlichting defect / ondeugdelijk
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-roestschade" role="tabpanel" aria-labelledby="pills-roestschade-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Binnendorpel L. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Binnendorpel R. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Buitendorpel L. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Buitendorpel R. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Veerschotel roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Chassisbalk roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Bodemplaat roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Frontbalk roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Subframe V. roestschade / ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Subframe A. roestschade / ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Wielkuip L.V. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Wielkuip R.V. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Wielkuip L.A. roestschade (lassen 70%)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Wielkuip R.A. roestschade (lassen 70%)
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-aandrijving" role="tabpanel" aria-labelledby="pills-aandrijving-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Aandrijving ondeugdelijk bevestigd
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Aandrijfashoes L.V. verv.
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Aandrijfashoes R.V. verv.
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Aandrijfashoes L.A. verv.
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Aandrijfashoes R.A. verv.
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Fuseekogelhoes L.V. verv.
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Fuseekogelhoes R.V. verv.
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Fuseekogel L.V. speling (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Fuseekogel R.V. speling (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stuurkogel L. speling (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stuurkogel R. speling (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stuurkogelhoes L. verv.
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stuurkogelhoes R. verv.
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stuurhuishoes L. verv.
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stuurhuishoes R. verv.
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Wiellager L.V. hoorbaar/speling (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Wiellager R.V. hoorbaar/speling (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Wiellager L.A. hoorbaar/speling (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Wiellager R.A. hoorbaar/speling (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stuurkolom speling
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-ophanging" role="tabpanel" aria-labelledby="pills-ophanging-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Draagarm L.V. speling/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Draagarm R.V. speling/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Draagarm L.A. speling/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Draagarm R.A. speling/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stabilisatorstang/rubber L.V. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stabilisatorstang/rubber R.V. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stabilisatorstang/rubber L.A. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stabilisatorstang/rubber R.A. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Spiraalveer L.V. gebroken/gescheurd/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Spiraalveer R.V. gebroken/gescheurd/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Spiraalveer L.A. gebroken/gescheurd/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Spiraalveer R.A. gebroken/gescheurd/ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Veerschotel L.V. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Veerschotel R.V. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Veerschotel L.A. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Veerschotel R.A. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Schokbreker L.V. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Schokbreker R.V. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Schokbreker L.A. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Schokbreker R.A. ondeugdelijk (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stuurhuis vertoont lekkage
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Stuurbekrachtiging ondeugdelijk
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-remmen" role="tabpanel" aria-labelledby="pills-remmen-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remverschil V.
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remverschil A.
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remschijven V. vervangen
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remschijven A. vervangen
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remsysteem vertoont lekkage
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remdrukbegrenzer zit vast/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remslang L.V. misvormt/beschadigd
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remslang R.V. misvormt/beschadigd
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remslang L.A. misvormt/beschadigd
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remslang R.A. misvormt/beschadigd
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Handremkabel ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Handrem werkt onvoldoende
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Wiel L.V. loopt zwaar (remmen)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Wiel R.V. loopt zwaar (remmen)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Wiel L.A. loopt zwaar (remmen)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Wiel R.A. loopt zwaar (remmen)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        ABS systeem ondeugdelijk (lamp/werking)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remleidingen geheel ontroesten en tectyleren (putcorrosie)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remleidingen vervangen (putcorrosie)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remschijven roest
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remvloeistof niveau te laag
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remblokken A. vervangen
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Remblokken V. vervangen
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Voetrem  / handrem L.A. werkt niet
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Voetrem  / handrem R.A. werkt niet
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-carrosserie" role="tabpanel" aria-labelledby="pills-carrosserie-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Portier ondeugdelijk (slot/werking)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Achterklep ondeugdelijk (slot/werking)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Voorruit vervangen
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Ruitenwissers vervangen
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Ruitensproeier defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Ventilator/aanjager defect/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Spiegels beschadigd/ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Zitplaats ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Gordel L.V. ondeugdelijk/beschadigd (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Gordel R.V. ondeugdelijk/beschadigd (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Gordel L.A. ondeugdelijk/beschadigd (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Gordel R.A. ondeugdelijk/beschadigd (verv.)
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Voorbumper zit los/ondeugdlijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Achterbumper zit los/ondeugdelijk
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-diversen" role="tabpanel" aria-labelledby="pills-diversen-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Kentekenplaat V. ondeugdelijk/onleesbaar/beschadigd
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Kentekenplaat A. ondeugdelijk/onleesbaar/beschadigd
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Motorsteun ondeugdelijk
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        Claxon defect/ondeugdelijk
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane" id="pills-adviezen" role="tabpanel" aria-labelledby="pills-adviezen-tab" tabindex="0">
                            <div class="list-group-container">
                                <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        AC1 banden
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        AC2 schokbrekers
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        AC3 roestschade
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        AC4 speling kogels
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        AC5 remmen
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
                                        RA1 airbag
                                    </li>
                                    <li class="list-group-item list-group-item" aria-current="true">
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
