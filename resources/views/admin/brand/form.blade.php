<div class="mb-2">
   <label for="name" class="form-label">Brand Name</label>
   <input class="form-control" type="text" name="name" id="name" value="{{ isset($brand) ? $brand->name : '' }}"
      required>
</div>

<div class="mb-3">
   <label for="dropdown" class="form-label">Brand Name</label>
   <select name="status" id="dropdown" class="form-select" aria-label="Default select example">
      <option value="active" {{ isset($brand) && $brand->status == 'active' ? 'selected' : '' }}>Active</option>
      <option value="inactive" {{ isset($brand) && $brand->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
   </select>
</div>
