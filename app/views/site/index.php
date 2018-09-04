<h1>Yii2</h1>

<?=$oleg; ?>
<div class="container pt-5" id="app">
    <div class="row mb-3">
        <div class="col">
            <h1>Cars application</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label for="search">Find yor car</label>
                <input
                    type="text"
                    class="form-control"
                    id="search"
                    placeholder="Name, model"
                    v-model="search"
                >
            </div>

            <hr>

            <ul class="list-group">
                <li
                    v-for="(car, index) in filteredCars "
                    class="list-group-item list-group-item-action pointer"
                    @click="SelectCar(index)"
                    :class="{'active': selectedCarIndex === index }"
                >{{ car.name }} - {{ car.model }}</li>
            </ul>

        </div>

        <div class="col-md-8 pt-3">
            <div class="row">
                <div class="col-md-5">
                    <h2>{{ car.name }}</h2>
                    <img
                        :src="car.image"
                        :alt="car.name"
                        class="rounded detail-car-image"
                    >
                </div>

                <div class="col-md-7 pt-2">
                    <h5>Car details</h5>
                    <ul>
                        <li>Model - <strong>{{ car.model }}</strong></li>
                        <li>Year - <strong>{{ car.year }}</strong></li>
                        <li>Owner - <strong>{{ car.owner }}</strong></li>
                    </ul>

                    <div class="phone">
                        <transition name="phone">
                            <p v-if="phoneVisibility">{{ car.phone }}</p>
                        </transition>
                    </div>

                    <button @click="phoneVisibility = !phoneVisibility"
                            class="btn btn-outline-success mr-3"
                    >{{ phoneButtonText }}</button>
                    <button
                        class="btn btn-primary"
                        @click="modalVisibility = true"
                    >Buy</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row pt-3" v-if="logs.length !== 0">
        <div class="col-md-12">
            <ul class="list-group">
                <li
                    v-for="log in logs"
                    class="list-group-item "
                    :class="{
                            'list-group-item-danger' : log.type === 'cancel',
                            'list-group-item-success' : log.type === 'ok',
                        }"
                >
                    {{ log.text }}   {{ log.date | date }}
                </li>
            </ul>
        </div>
    </div>

    <transition name="modal">
        <div class="modal fade show" tabindex="-1" role="dialog" v-if="modalVisibility">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Do you wont to buy a car?</h5>
                        <button type="button"
                                class="close"
                                data-dismiss="modal"
                                aria-label="Close"
                                @click="modalVisibility = false">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <ul>
                            <li>Model - <strong>{{ car.model }}</strong></li>
                            <li>Year - <strong>{{ car.year }}</strong></li>
                            <li>Owner - <strong>{{ car.owner }}</strong></li>

                        </ul>


                    </div>
                    <div class="modal-footer">
                        <button
                            type="button"
                            class="btn btn-primary"
                            @click="newOrder"
                        >
                            BUY
                        </button>

                        <button
                            type="button"
                            class="btn btn-secondary"
                            data-dismiss="modal"
                            @click="cancelorder"
                        >
                            Cancel
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </transition>
    <transition name="fade">
        <div class="modal-backdrop fade show" v-if="modalVisibility"></div>
    </transition>
</div>
