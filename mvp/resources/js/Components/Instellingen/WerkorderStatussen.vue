<template>
    <div>
        <table class="table fnt09" style="width:50%;">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">status</th>
                <th scope="col">actief</th>
                <th scope="col">in_visueel</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="status in werkorder_statussen">
                <th scope="row">{{status.id}}</th>
                <td>{{status.status}}</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" v-if = "status.actief === 1" checked type="checkbox" v-on:change="actiefUpdaten(status.id, 0)">
                        <input class="form-check-input" v-else-if = "status.actief === 0"  type="checkbox" v-on:change="actiefUpdaten(status.id, 1)">
                    </div>
                </td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" v-if = "status.in_visueel === 1" checked type="checkbox" >
                        <input class="form-check-input" v-else-if = "status.in_visueel === 0"  type="checkbox" >
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary fnt09" data-bs-toggle="modal" data-bs-target="#ModalWerkorderStatusToevoegen">
            Werkorder status toevoegen
        </button>

        <!-- Modal -->
        <div class="modal fade" id="ModalWerkorderStatusToevoegen" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div>
                            <label for="inputNieuweStatus" class="form-label fnt09">Status</label>
                            <input type="text" class="form-control fnt09" id="inputNieuweStatus" v-model="form.status">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fnt09" data-bs-dismiss="modal">Sluiten</button>
                        <button type="button" class="btn btn-primary fnt09" v-on:click="statusToevoegenSubmit" data-bs-dismiss="modal">Toevoegen</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        werkorder_statussen: Array
    },
    data(){
        return {
            form: {
                status: "",
                actief: 1,
                in_visueel: 1,
            },
        }
    },
    methods: {
        checked(number) {
            return number !== 0;
        },
        statusToevoegenSubmit() {
            this.$inertia.post('/werkorder_statussen', this.form)
        },
        actiefUpdaten(id, nieuweActief) {
            this.$inertia.put(`/werkorder_statussen/${id}`, {actief: nieuweActief})
        }
    }

}
</script>

<style scoped>

</style>
