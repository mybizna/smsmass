<template>
    <edit-render :path_param="['smsmass', 'autoresponder']" :model="model">

        <div class="row">
            <div class="col-md-6">
                <FormKit v-model="model.id" label="Id" id="id" type="hidden" validation="required" />
                <FormKit v-model="model.username" label="Username" id="username" type="text" validation="required" />
                <FormKit v-model="model.password" label="Password" id="password" type="text" validation="required" />
                <FormKit v-model="model.partner_id" label="Partner" id="partner_id" type="text" validation="required" />
            </div>
            <div class="col-md-6">

            </div>
        </div>

    </edit-render>
</template>

<script>
export default {
    
    data () {
        return {
            id: null,
            model: {
                id: "",
                subject: "",
                body: "",
                wait_period: "",
                table_name: "",
                email_field: "",
                date_field: "",
                start_date: "",
                end_date: "",
                published: "",
            },

        };

    }
};
</script>
