<template>
    <main>
        <header>
            <Link href="/">Visueel</Link><br>
            <Link href="/werkorders">Werkorders</Link><br>
            <Link href="/planning">Planning</Link><br>
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
