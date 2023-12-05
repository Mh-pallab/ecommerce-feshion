<div class="mb-2">
   <label for="name" class="form-label">Category Name</label>
   <input class="form-control" type="text" name="name" id="name"
      value="{{ isset($category) ? $category->name : '' }}" required>
</div>

<div class="mb-3">
   <label for="dropdown" class="form-label">Status</label>
   <select name="status" id="dropdown" class="form-select" aria-label="Default select example">
      <option value="active" {{ isset($category) && $category->status == 'active' ? 'selected' : '' }}>Active</option>
      <option value="inactive" {{ isset($category) && $category->status == 'inactive' ? 'selected' : '' }}>Inactive
      </option>
   </select>
</div>
