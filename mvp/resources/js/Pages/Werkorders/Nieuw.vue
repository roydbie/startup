<template>
    <div>
        <Layout>
            <Head>
                <title>Werkorders</title>
            </Head>

            <Link href="/werkorders" class="btn btn-primary fnt09 mt-3" style="margin-left: 5%;">Terug</Link>

            <h1 class="page-heading">Nieuw werkorder</h1>

            <form v-on:submit.prevent="submit">
                <input v-model="form.omschrijving"/>
                <button type="submit">Klaar</button>
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
