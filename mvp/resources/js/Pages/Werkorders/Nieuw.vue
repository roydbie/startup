<template>
    <div>
        <Layout>
            <Head>
                <title>Werkorders</title>
            </Head>

            <Link href="/werkorders" class="btn btn-primary fnt09 mt-3" style="margin-left: 5%;">Terug</Link>

            <h1 class="page-heading">Nieuw werkorder</h1>

            <form v-on:submit.prevent="submit" style="width:30%;margin:auto;">
                <div class="mb-3">
                    <label for="omschrijvingInput" class="form-label fnt09">Omschrijving</label>
                    <input type="text" class="form-control fnt09" id="omschrijvingInput" v-model="form.omschrijving">
                </div>
                <div class="mb-3">
                    <label for="aangemaaktDoorInput" class="form-label fnt09">Aangemaakt door</label>
                    <select class="form-select fnt09" id="aangemaaktDoorInput" v-model="form.aangemaakt_door">
                        <option value="Roy de Bie" selected>Roy de Bie</option>
                        <option value="admin">admin</option>
                        <option value="Iemand anders">Iemand anders</option>
                        <option value="Henry d B">Henry d B</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="klantInput" class="form-label fnt09">Klant</label>
                    <input class="form-control fnt09" list="datalistKlanten" id="klantInput" v-model="form.klant">
                    <datalist id="datalistKlanten">
                        <option value="BaKu metaalbewerking"></option>
                        <option value="DB-Sportscars"></option>
                        <option value="APK Autoservice Brabant"></option>
                        <option value="Joep van het Hek"></option>
                        <option value="ABC Media"></option>
                    </datalist>
                </div>
                <div class="mb-3">
                    <label for="statusInput" class="form-label fnt09">Status</label>
                    <select class="form-select fnt09" id="statusInput" v-model="form.status">
                        <option value="1" selected>Aangemeld</option>
                        <option value="2">Bezig</option>
                        <option value="3">Afgerond</option>
                        <option value="4">Verwijderd</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary fnt09">Klaar</button>
            </form>
        </Layout>
    </div>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue3'
import Layout from '../../Layout/Default.vue'

export default {
    components: {
        Layout,
        Link,
        Head,
    },
    data() {
        return {
            form: {
                omschrijving: "",
                aangemaakt_door: "",
                klant: "",
                status: 1,
                geschatte_tijdsduur: "",
                planning_datum: "",
                planning_tijd: "",
                deadline_datum: "",
                deadline_tijd: ""
            },
        }
    },
    methods: {
        submit() {
            this.$inertia.post('/werkorders/nieuw', this.form)
        },
    }
}
</script>

<style scoped>

</style>
