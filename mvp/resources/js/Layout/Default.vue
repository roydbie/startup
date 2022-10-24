<template>
    <main>
        <header class="header">
            <Link href="/" class="topnav-link" style="margin-left:3rem!important;">Visuele weergave</Link>
            <Link href="/werkorders" class="topnav-link">Werkorders</Link>
            <Link href="/planning" class="topnav-link">Planning</Link>
        </header>
        <article>
            <slot />
        </article>
    </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
    components: {
        Link,
    }
}
</script>

<style scoped>

.header {
    background-color: whitesmoke;
}

.topnav-link {
    color: black;
    text-decoration: none;
    display: inline-block;
    margin: 0 1.5rem;
    padding: 1rem 0;
    border-bottom: 2px solid #34eb74;

}
</style>
