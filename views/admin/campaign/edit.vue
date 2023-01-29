<template>
    <customform></customform>
</template>

<script>
export default {
    components: {
        customform: window.$func.fetchComponent(["smsmass", "campaign", "form.vue"])
    },
};
</script>
