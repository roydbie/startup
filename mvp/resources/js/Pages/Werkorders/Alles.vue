<template>
    <div>
        <Layout>
            <Head>
                <title>Werkorders</title>
            </Head>
            <h1 class="page-heading">Werkorders</h1>

            <p><b>What do i need on this page?</b></p>
            <p>
                - All workorders to put into a table <br>
                Allemaal
            </p>

            <Link href="/werkorders/980" class="topnav-link">Naar werkorders details</Link>
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
}
</script>
