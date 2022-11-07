<template>
    <div>
        <table class="table fnt09" style="width:50%;">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">status</th>
                <th scope="col">actief</th>
                <th scope="col">in_visueel</th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="status in werkorder_statussen" >
                <th v-if="status.verwijderd === 0" scope="row">{{status.id}}</th>
                <td v-if="status.verwijderd === 0" >{{status.status}}</td>
                <td v-if="status.verwijderd === 0">
                    <div class="form-check">
                        <input class="form-check-input" v-if = "status.actief === 1" checked type="checkbox" v-on:change="statusUpdaten(status.id, 0, status.in_visueel)">
                        <input class="form-check-input" v-else-if = "status.actief === 0"  type="checkbox" v-on:change="statusUpdaten(status.id, 1, status.in_visueel)">
                    </div>
                </td>
                <td v-if="status.verwijderd === 0">
                    <div class="form-check">
                        <input class="form-check-input" v-if = "status.in_visueel === 1" checked type="checkbox" v-on:change="statusUpdaten(status.id, status.actief, 0)">
                        <input class="form-check-input" v-else-if = "status.in_visueel === 0"  type="checkbox" v-on:change="statusUpdaten(status.id, status.actief, 1)">
                    </div>
                </td>
                <td v-if="status.verwijderd === 0">
                    <button class="btn btn-outline-danger btn-sm fnt09" v-on:click="statusVerwijderen(status.id)">x</button>
                </td>

                <th v-if="status.verwijderd === 1" scope="row" class="verwijderd" :class="display"> {{status.id}}</th>
                <td v-if="status.verwijderd === 1" class="verwijderd" :class="display">{{status.status}}</td>
                <td v-if="status.verwijderd === 1" class="verwijderd" :class="display">
                    <div class="form-check">
                        <input class="form-check-input" v-if = "status.actief === 1" checked type="checkbox" v-on:change="statusUpdaten(status.id, 0, status.in_visueel)">
                        <input class="form-check-input" v-else-if = "status.actief === 0"  type="checkbox" v-on:change="statusUpdaten(status.id, 1, status.in_visueel)">
                    </div>
                </td>
                <td v-if="status.verwijderd === 1" class="verwijderd" :class="display">
                    <div class="form-check">
                        <input class="form-check-input" v-if = "status.in_visueel === 1" checked type="checkbox" v-on:change="statusUpdaten(status.id, status.actief, 0)">
                        <input class="form-check-input" v-else-if = "status.in_visueel === 0"  type="checkbox" v-on:change="statusUpdaten(status.id, status.actief, 1)">
                    </div>
                </td>
                <td v-if="status.verwijderd === 1" class="verwijderd" :class="display">
                    <button class="btn btn-success btn-sm fnt09" v-on:click="statusHerstellen(status.id)">Herstel</button>
                </td>
            </tr>
            </tbody>
        </table>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary fnt09" data-bs-toggle="modal" data-bs-target="#ModalWerkorderStatusToevoegen">
            Werkorder status toevoegen
        </button>

        <button type="button" class="btn btn-warning fnt09" style="margin-left: 1%;" v-on:click="displayVeranderen">
            Verwijderde statussen tonen
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
                        <button type="button" class="btn btn-primary fnt09" v-on:click="statusToevoegen" data-bs-dismiss="modal">Toevoegen</button>
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
            },
            display: 'displayNone'
        }
    },
    methods: {
        checked(number) {
            return number !== 0;
        },
        statusToevoegen() {
            this.$inertia.post('/werkorder_statussen', this.form);
        },
        statusUpdaten(id, nieuweActief, nieuweInVisueel) {
            this.$inertia.put(`/werkorder_statussen/${id}`, {actief: nieuweActief, in_visueel: nieuweInVisueel});
        },
        statusVerwijderen(id) {
            if(confirm('Weet u zeker dat u status ' + id + ' wilt verwijderen?')){
                this.$inertia.delete(`/werkorder_statussen/${id}`);
            }
        },
        statusHerstellen(id) {
            if(confirm('Weet u zeker dat u status ' + id + ' wilt herstellen?')){
                this.$inertia.post(`/werkorder_statussen/herstellen/${id}`);
            }
        },
        displayVeranderen() {
            if (this.display === 'displayBlock') {
                this.display = "displayNone";
            } else {
                this.display = "displayBlock";
            }

        }
    }

}
</script>

<style scoped>
.verwijderd {
    background-color: #fc8279;
}

.displayNone {
    display: none;
}

.displayBlock {
    display: table-cell;
}
</style>
