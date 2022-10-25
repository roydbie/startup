<template>
    <div>
        <h2 class="mx-5 mt-4">Opmerkingen</h2>
        <ul class="nav nav-pills mb-1 mx-3 mt-3" id="pills-tab" role="tablist">
            <li v-for="(categorie, index) in categorien" class="nav-item" role="presentation">
                <button v-if="index === 0" class="nav-link active" :id="'pills-' + categorie + '-tab'" data-bs-toggle="pill" :data-bs-target="'#pills-'+ categorie" type="button" role="tab" :aria-controls="'pills-'+ categorie" aria-selected="true">{{categorie.charAt(0).toUpperCase() + categorie.slice(1)}}</button>
                <button v-else class="nav-link" :id="'pills-' + categorie + '-tab'" data-bs-toggle="pill" :data-bs-target="'#pills-'+ categorie" type="button" role="tab" :aria-controls="'pills-'+ categorie" aria-selected="true">{{categorie.charAt(0).toUpperCase() + categorie.slice(1)}}</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div v-for="(item, index) in opmerkingen" :class="[index === 0 ? 'show active' : '']" class="tab-pane" :id="'pills-' + item.categorie" role="tabpanel" :aria-labelledby="'pills-' + item.categorie + '-tab'" tabindex="0">
                <div class="list-group-container">
                    <ul class="list-group fnt09" style="width:90%;margin:1rem auto 2rem auto;">
                        <li v-for="opmerking in item.opmerkingen" class="list-group-item d-flex justify-content-between align-items-center">
                            {{ opmerking.opmerking }}
                            <span v-if="opmerking.in_gebruik === false" class="badge bg-success rounded-pill" style="cursor:pointer;">+</span>
                            <span v-else class="badge bg-danger rounded-pill" style="cursor:pointer;">x</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            categorien: ['banden','uitlaat','verlichting','roestschade','aandrijving','ophanging','remmen','carrosserie','diversen','adviezen'],
            opmerkingen: [
                {
                    categorie: 'banden',
                    opmerkingen: [
                        {opmerking: 'Wiel/velg ondeugdelijk', in_gebruik: true },
                        {opmerking: 'Band L.V. verv.', in_gebruik: false },
                        {opmerking: 'Band R.V. verv.', in_gebruik: false },
                        {opmerking: 'Band L.A. verv.', in_gebruik: false },
                        {opmerking: 'Band R.A. verv.', in_gebruik: false },
                        {opmerking: 'Wiel/band contact ondeugdelijk', in_gebruik: false },
                        {opmerking: 'Draairichting L.V. band', in_gebruik: false },
                        {opmerking: 'Draairichting R.V. band', in_gebruik: true },
                        {opmerking: 'Draairichting L.A. band', in_gebruik: false },
                        {opmerking: 'Draairichting R.A. band', in_gebruik: false },
                        {opmerking: 'Band L.V. spijker/canvasbreuk/poreus', in_gebruik: true },
                        {opmerking: 'Band R.V. spijker/canvasbreuk/poreus', in_gebruik: false },
                        {opmerking: 'Band L.A. spijker/canvasbreuk/poreus', in_gebruik: false },
                        {opmerking: 'Band R.A. spijker/canvasbreuk/poreus', in_gebruik: false },
                        {opmerking: 'Bandenspanning te laag/controleren', in_gebruik: true }

                    ]
                },
                {
                    categorie: 'uitlaat',
                    opmerkingen: [
                        {opmerking: 'Brandstof lekkage', in_gebruik: false },
                        {opmerking: 'Tankdop ondeugdelijk (verv.)', in_gebruik: false },
                        {opmerking: 'Tankband ondeugdelijk (verv.)', in_gebruik: false },
                        {opmerking: 'LPG installatie ondeugdelijk', in_gebruik: false },
                        {opmerking: 'Gasdop ontbreekt', in_gebruik: false },
                        {opmerking: 'Uitlaatsysteem niet gasdicht', in_gebruik: true },
                        {opmerking: 'CO gehalte te hoog', in_gebruik: false },
                        {opmerking: 'EOBD niet volgens voorschrift', in_gebruik: false },
                        {opmerking: 'Roetmeting te hoog', in_gebruik: false },
                        {opmerking: 'Uitlaat ophanging ondeugdelijk', in_gebruik: false }

                    ]
                }
            ]
        }
    },
}
</script>

<style scoped>
.list-group-container {
    height: 60vh;
    max-height:50vh;
    overflow: scroll;
}

</style>
