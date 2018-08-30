const car = (name,model,owner,year,phone,image) => ({name,model,owner,year,phone,image});
const cars = [
   car('Ford','Focus','Max','2016','+7 988 776 77 666','images/focus.jpg'),
   car('Ford','Cuga','Inna','2018','+7 978 56 56 655','images/cuga.jpg'),
   car('Mustang','Mondeo','Ivan','2014','+7 900 776 77 006','images/fiesta.jpg'),
];
const log = (text,type,date = new Date()) => ({text,type,date});

new Vue({
    el: "#app",
    data: {
        cars: cars,
        car: cars[0],
        logs:[],
        selectedCarIndex: 0,
        phoneVisibility : false,
        search: '',
        modalVisibility : false
    },
    methods: {
        SelectCar(index) {
            this.car = cars[index];
            this.selectedCarIndex = index
        },
        newOrder(){
            this.modalVisibility = false
            this.logs.push(
                log(`Success order - ${this.car.name} - ${this.car.model}`, 'ok')
            )
        },
        cancelorder(){
            this.modalVisibility = false
            this.logs.push(
                log(`Canceled order - ${this.car.name} - ${this.car.model}`, 'cancel')
            )
        }
    },
    computed:{
         phoneButtonText(){
             return this.phoneVisibility ? 'Hide phone' : 'Show phone'
         },
        filteredCars(){
            var self = this;
             const  filtered =  this.cars.filter(function (car) {
                 return car.name.indexOf(self.search) > -1 ||  car.model.indexOf(self.search) > -1

             });

             return filtered;
        }
    },
    filters:{
        date(value){
            return value.toLocaleString()
        }
    }
});