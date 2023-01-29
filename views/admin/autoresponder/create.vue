<template>
    <customform></customform>
</template>

<script>
export default {
    components: {
        customform: window.$func.fetchComponent(["smsmass", "autoresponder", "form.vue"])
    },
};
</script>
