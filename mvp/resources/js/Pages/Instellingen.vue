<template>
    <div>
        <Layout>
            <Head>
                <title>Instellingen</title>
            </Head>
            <h1 class="page-heading">Instellingen</h1>

            <ul class="nav nav-tabs fnt09" id="myTab" role="tablist" style="width:90%;margin:auto;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="werkorderStatussen-tab" data-bs-toggle="tab" data-bs-target="#werkorderStatussen" type="button" role="tab" aria-controls="werkorderStatussen" aria-selected="true">Werkorder statussen</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="factuurregels-tab" data-bs-toggle="tab" data-bs-target="#factuurregels" type="button" role="tab" aria-controls="factuurregels" aria-selected="false">Factuurregels</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="opmerkingen-tab" data-bs-toggle="tab" data-bs-target="#opmerkingen" type="button" role="tab" aria-controls="opmerkingen" aria-selected="false">Opmerkingen</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent" style="width:90%;margin:auto;">
                <div class="tab-pane show active" id="werkorderStatussen" role="tabpanel" aria-labelledby="werkorderStatussen-tab">
                    <WerkorderStatussen :werkorder_statussen="werkorder_statussen"></WerkorderStatussen>
                </div>
                <div class="tab-pane" id="factuurregels" role="tabpanel" aria-labelledby="factuurregels-tab">Factuurregels</div>
                <div class="tab-pane" id="opmerkingen" role="tabpanel" aria-labelledby="opmerkingen-tab">Opmerkingen</div>
            </div>

        </Layout>
    </div>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue3'
import Layout from '../Layout/Default.vue'
import WerkorderStatussen from "../Components/Instellingen/WerkorderStatussen.vue";


export default {
    props: {
        werkorder_statussen: Array
    },
    components: {
        WerkorderStatussen,
        Layout,
        Link,
        Head,
    },
}
</script>
