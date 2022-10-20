<template>
    <div>
        <Layout>
            <Head>
                <title>Visual map</title>
            </Head>
            <h1 class="page-heading">Visual map</h1>

            <p><b>What do i need on this page?</b></p>
            <p>
                - The locations from the database "that the user set up" (hard coded for now) <br>
                - All workorders with a certain status <br>
                - The current location of these workorders

            </p>
        </Layout>
    </div>
</template>

<script>
import { Link, Head } from '@inertiajs/inertia-vue3'
import Layout from '../Layout/Default.vue'


export default {
    components: {
        Layout,
        Link,
        Head,
    },
}
</script>
