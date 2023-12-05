<div class="mb-2">
   <label for="name" class="form-label">Sub Category Name</label>
   <input class="form-control" type="text" name="name" id="name"
      value="{{ isset($subcategory) ? $subcategory->name : '' }}" required>
</div>

<div class="mb-3">
   <label for="category" class="form-label">Category Name</label>
   <select name="category_id" id="category" class="form-select" aria-label="Default select example">
      <option>--Select a Category--</option>
      @foreach ($categorys as $item)
         <option value="{{ $item->id }}"
            {{ isset($categorys) && isset($subcategory) && $item->id == $subcategory->category_id ? 'selected' : '' }}>
            {{ $item->name }}
         </option>
      @endforeach
   </select>
</div>

<div class="mb-3">
   <label for="dropdown" class="form-label">Status</label>
   <select name="status" id="dropdown" class="form-select" aria-label="Default select example">
      <option value="active" {{ isset($subcategory) && $subcategory->status == 'active' ? 'selected' : '' }}>Active
      </option>
      <option value="inactive" {{ isset($subcategory) && $subcategory->status == 'inactive' ? 'selected' : '' }}>
         Inactive
      </option>
   </select>
</div>
