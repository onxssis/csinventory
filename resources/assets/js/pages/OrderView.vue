<script>
    export default {
        data() {
           return {
               selectedCustomer: 0,
               selectedProduct: 0,
               orderStatus: 0,
               orderQuantity: 1,
               feedback: '',
//               totalPrice: ,
               customer: {
                   name: '',
                   email: '',
                   address: '',
                   phone: ''
               },
               product: {
                   name: '',
                   serial: '',
                   price: 0,
                   supplier: '',
                   warehouse: ''
               },
           }
        },
        computed: {
            priceInNaira() {
                return '&#8358;' + this.totalPrice().toLocaleString();
            },

        },
        methods: {
            totalPrice() {
                return this.product.price * this.orderQuantity;
            },
           getCustomerData() {
               if (this.selectedCustomer === 0) return;
               axios.get('/api/orders/customers', {
                   params: {
                       id: this.selectedCustomer
                   }
               })
               .then(({data}) => {
                   this.customer.email = data.email;
                   this.customer.phone = data.telephone;
                   this.customer.address = data.address1;

               }, () => alert('Unable to fetch user'))
           },
            getProductData() {
                if (this.selectedProduct === 0) return;
                axios.get('/api/orders/products', {
                    params: {
                        id: this.selectedProduct
                    }
                })
                .then(({data}) => {
                    this.product.name = data.name;
                    this.product.serial = data.code;
                    this.product.price = data.selling_price;
                    this.product.supplier = data.supplier.name;
                    this.product.warehouse = data.warehouse.name;

                }, () => alert('Unable to fetch product'))
            },
            submitOrderForm() {
                axios.post('/api/orders', {
                    product: this.selectedProduct,
                    customer: this.selectedCustomer,
                    quantity: this.orderQuantity,
                    amount: this.totalPrice(),
                    status: this.orderStatus,
                })
                .then(res => {
                    if (res.data.success) {
                        alert('Order saved successfully.');

                        location.reload();
                    }
                }, (e) => {
                    this.feedback = e.response.data.message;
                });
            }
        }
    }
</script>

<style>
</style>