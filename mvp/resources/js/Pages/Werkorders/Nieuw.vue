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
                omschrijving: "Werkorder-test",
                aangemaakt_door: "Roy de Bie",
                klant: "Iemand de klant",
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
        formatDate(date) {
            const options = { year: 'numeric', month: 'long', day: 'numeric' }
            return new Date(date).toLocaleDateString('en', options)
        },
    }
}
</script>

<style scoped>

</style>
