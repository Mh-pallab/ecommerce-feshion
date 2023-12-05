<div class="mb-2">
   <label for="name" class="form-label">Product Name</label>
   <input class="form-control" type="text" name="name" id="name"
      value="{{ isset($product) ? $product->name : '' }}" required>
</div>

<div class="mb-2">
   <label for="price" class="form-label">Product Price</label>
   <input class="form-control" type="number" name="price" id="price"
      value="{{ isset($product) ? $product->price : '' }}" required>
</div>

<div class="mb-3">
   <label for="brand" class="form-label">Brand Name</label>
   <select name="brand_id" id="brand" class="form-select" aria-label="Default select example">
      <option>--Select a Brand--</option>
      @foreach ($brands as $item)
         <option value="{{ $item->id }}"
            {{ isset($brands) && isset($product) && $item->id == $product->brand_id ? 'selected' : '' }}>
            {{ $item->name }}
         </option>
      @endforeach
   </select>
</div>

<div class="mb-3">
   <label for="category" class="form-label">Category Name</label>
   <select name="category_id" id="category" class="form-select" aria-label="Default select example"
      onchange="getSubCategory('/getsubcategory/', this)">
      <option>--Select a Category--</option>
      @foreach ($categorys as $item)
         <option value="{{ $item->id }}"
            {{ isset($categorys) && isset($product) && $item->id == $product->category_id ? 'selected' : '' }}>
            {{ $item->name }}
         </option>
      @endforeach
   </select>
</div>

<div class="mb-3">
   <label for="get-subcategory" class="form-label">Sub Category Name</label>
   <select name="subcategory_id" id="get_subcategory" class="form-select" aria-label="Default select example">
      @if (isset($subcategorys))
         @foreach ($subcategorys as $item)
            <option value="{{ $item->id }}"{{ $product->subcategory_id == $item->id ? 'selected' : '' }}>
               {{ $item->name }}</option>
         @endforeach
      @else
         <option>--Select a Sub Category--</option>
      @endif
   </select>
</div>

<div class="mb-3">
   <label class="form-label" for="description">Description</label>
   <textarea class="form-control" name="description" id="description" cols="30" rows="5">{{ isset($product) ? $product->description : '' }}</textarea>
</div>

<div class="mb-3">
   <label for="image" class="form-label">Image</label>
   <input type="file" class="form-control" id="image" name="image">
</div>

<div class="mb-3">
   <label for="status" class="form-label">Status</label>
   <select name="status" id="status" class="form-select" aria-label="Default select example">
      <option value="active" {{ isset($product) && $product->status == 'active' ? 'selected' : '' }}>Active
      </option>
      <option value="inactive" {{ isset($product) && $product->status == 'inactive' ? 'selected' : '' }}>
         Inactive
      </option>
   </select>
</div>
