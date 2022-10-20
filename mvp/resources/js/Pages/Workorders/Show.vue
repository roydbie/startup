<template>
    <div>
        <Layout>
            <Head>
                <title>Workorder {{ id }}</title>
            </Head>

            <div class="button-switch-div">
                <button class="button-switch" style="border-radius: 1rem 0 0 1rem;border-right:none;">Invoice</button>
                <button class="button-switch">Add billing items</button>
                <button class="button-switch" style="border-radius: 0 1rem 1rem 0;border-left:none;">Add annotations</button>
            </div>


            <div class="column" style="width:60%;margin-left:20%;margin-right:20%;">
                <h2 class="ml2rem">Workorder {{ id }}</h2>
            </div>

            <div>
                <div class="column" style="width:45%;margin-left:5%;margin-right:5%;">
                    <h2 class="ml2rem">Workorder {{ id }}</h2>
                </div>
                <div class="column" style="width:40%;margin-right:5%;">
                    <h2 class="ml2rem">Billing items</h2>
                </div>
            </div>

            <div>
                <div class="column" style="width:45%;margin-left:5%;margin-right:5%;">
                    <h2 class="ml2rem">Workorder {{ id }}</h2>
                </div>
                <div class="column" style="width:40%;margin-right:5%;">
                    <h2 class="ml2rem">Annotations</h2>
                </div>
            </div>



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
    props: {
        id: String
    }
}
</script>

<style scoped>

.ml2rem {
    margin-left:2rem;
}

.column {
    display:inline-block;
    background-color: #34eb74;
    margin-top: 1rem;
}

.button-switch-div {
    margin-left: 2rem;
    margin-top: 1rem;
}

.button-switch {
    height:2.5rem;
    padding: 0 1.2rem;
    background-color: white;
    border: 2px solid #34eb74;
    font-family: 'Raleway', sans-serif;
    font-weight: 700;
    color: black;
    cursor:pointer;
}
</style>
