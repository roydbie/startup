<template>
    <div>
        <Layout>
            <Head>
                <title>Planning</title>
            </Head>
            <h1 class="page-heading">Planning</h1>

            <p><b>What do i need on this page?</b></p>
            <p>
                - All workorders with a "date_planning" and "date_time" to put into a calendar <br>
                - The rest of the workorders should be on the side in a list and you should be able to give them a "date_planning" and "date_time" <br>
                {{ id }}

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
        Head
    },
}
</script>
