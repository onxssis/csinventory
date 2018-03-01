    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="customer" class="control-label">Customer</label>

        <select name="customer" id="customer" class="form-control" @change="getCustomerData" v-model="selectedCustomer">
            <option value="0">-- Select Customer --</option>
                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">{{ ucfirst($customer->name) }} &mdash;</option>
                @endforeach
        </select>

    </div>

    <div class="form-group ">
        <div class="col-sm-6 pl-0 mb-1">
            <label for="" class="label-control">Customer Email</label>
            <input
                    type="text"
                    class="form-control"
                    disabled
                    placeholder="Email"
                    v-model="customer.email">
        </div>
        <div class="col-sm-6 pr-0 mb-1">
            <label for="" class="label-control">Customer Phone</label>
            <input
                    type="text"
                    class="form-control"
                    disabled
                    placeholder="Phone Number"
                    v-model="customer.phone">
        </div>
    </div>

    <div class="form-group">
        <label for="" class="label-control">Customer Address</label>
        <input
                type="text"
                class="form-control"
                disabled
                placeholder="Address"
                v-model="customer.address">
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="customer" class="control-label">Product</label>

        <select name="customer" id="customer" class="form-control" @change="getProductData" v-model="selectedProduct">
            <option value="0">-- Select Product --</option>
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ ucfirst($product->name) }} &mdash; {{ $product->code }}</option>
            @endforeach
        </select>

    </div>

    <div class="form-group">
        <div class="col-sm-4 pl-0 mb-1">
            <label for="" class="label-control">Product Name</label>
            <input
                    type="text"
                    class="form-control"
                    disabled
                    placeholder="Product Name"
                    v-model="product.name">
        </div>
        <div class="col-sm-4 pr-0 pl-0 mb-1">
            <label for="" class="label-control">Product ID</label>
            <input
                    type="text"
                    class="form-control"
                    disabled
                    placeholder="Product Number"
                    v-model="product.serial">
        </div>

        <div class="col-sm-4 pr-0 mb-1">
            <label for="" class="label-control">Product Price</label>
            <input
                    type="text"
                    class="form-control"
                    disabled
                    placeholder="Product Price"
                    v-model="product.price">
        </div>
    </div>

    <div class="form-group mb-1">
        <div class="col-sm-6 pl-0">
            <label for="" class="label-control">Supplier Name</label>
            <input
                    type="text"
                    class="form-control"
                    disabled
                    placeholder="Supplier"
                    v-model="product.supplier">
        </div>
        <div class="col-sm-6 pr-0 mb-1">
            <label for="" class="label-control">Warehouse Located</label>
            <input
                    type="text"
                    class="form-control"
                    disabled
                    placeholder="Warehouse"
                    v-model="product.warehouse">
        </div>
    </div>

    <div class="form-group">
        <label for="quantity" class="label-control">Quantity</label>
        <input type="number" name="quantity" class="form-control" v-model="orderQuantity">
    </div>

    <div class="form-group">
        <label for="customer" class="control-label">Status</label>
        <select name="status" id="status" class="form-control" v-model="orderStatus">
            <option value="0">-- Select Status --</option>
            @foreach(['pending', 'paid', 'unpaid'] as $status)
                <option value="{{ $status }}">{{ ucfirst($status) }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <div class="pull-right">
            <h5>Total</h5>
            <strong>
                <span v-html="priceInNaira"></span>
            </strong>
        </div>
        <button class="btn btn-primary" type="submit">
            {{ $buttonText ?? 'Add Order' }}
        </button>
    </div>