@csrf
<div class="row gx-5 gt-2 my-1">
    <div class="col-5">
        <div class="row ">
            <div class="col-12 mb-2 ">
                <div class="py-2 w-75 m-auto bg-transparent">
                    <div class="my-2 d-flex">
                        <div class="m-auto">
                            <img class="img-thumbnail " id="previewImg" src="@if (@isset($tour)) {{ asset('uploads/tours') }}/{{ $tour->image }} @else{{ asset('assets/images/placeholder1.jpg') }} @endif" alt="Placeholder">
                        </div>
                    </div>
                    <div class="my-2">
                        <div class="input-group custom-file-button  m-auto w-75">
                            <label class="input-group-text" for="inputGroupFile">Choose Image</label>
                            <input type="file" class="form-control" id="inputGroupFile" name="image"
                                onchange="previewFile(this);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mr-3">
                <div class=" py-2 mx-auto bg-transparent">
                    <div class=" fw-bold mb-2 text-center text-uppercase">Add Modules</div>
                    <div class="">
                        <div class="mb-3 mx-3 d-flex">
                            <label for="inputName" class="form-label mx-2">Module1</label>
                            <input type="text" class="form-control " id="inputName" name="module_1"
                                placeholder="{{ __('Enter Module') }}"
                                value="{{ old('module_1') }}@isset($module){{ $module->module_1 }}@endisset"
                                required>
                        </div>
                        <div class="mb-3 mx-3 d-flex">
                            <label for="inputName" class="form-label mx-2">Module2</label>
                            <input type="text" class="form-control " id="inputName" name="module_2"
                                placeholder="{{ __('Enter Module') }}"
                                value="{{ old('module_2') }}@isset($module){{ $module->module_2 }}@endisset"
                                required>
                        </div>
                        <div class="mb-3 mx-3 d-flex">
                            <label for="inputName" class="form-label mx-2">Module3</label>
                            <input type="text" class="form-control " id="inputName" name="module_3"
                                placeholder="{{ __('Enter Module') }}"
                                value="{{ old('module_3') }}@isset($module){{ $module->module_3 }}@endisset"
                                required>
                        </div>
                        <div class="mb-3 mx-3 d-flex">
                            <label for="inputName" class="form-label mx-2">Module4</label>
                            <input type="text" class="form-control " id="inputName" name="module_4"
                                placeholder="{{ __('Enter Module') }}"
                                value="{{ old('module_4') }}@isset($module){{ $module->module_4 }}@endisset"
                                required>
                        </div>
                        <div class="mb-3 mx-3 d-flex">
                            <label for="inputName" class="form-label mx-2">Module5</label>
                            <input type="text" class="form-control " id="inputName" name="module_5"
                                placeholder="{{ __('Enter Module') }}"
                                value="{{ old('module_5') }}@isset($module){{ $module->module_5 }}@endisset"
                                required>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- login-frm-bg --}}
    </div>
    <div class="col-7">
        <div class="py-2 mx-auto bg-transparent">
            <div class=" fw-bold mb-2 text-center text-uppercase">
                @isset($create)
                    Create New Tour
                @endisset
                @isset($edit)
                    Update Tour
                @endisset</div>
            <div class="">
                <div class="mb-3 mx-3">
                    <label for="inputName" class="form-label mx-2">Tour Name</label>
                    <input type="text" class="form-control " id="inputName" name="name"
                        placeholder="{{ __('Tour Name') }}"
                        value="{{ old('name') }}@isset($tour){{ $tour->name }}@endisset"
                        required>
                </div>
                <div class="mb-3 mx-3">
                    <label for="inputName" class="form-label mx-2">Tour SubHead</label>
                    <input type="text" class="form-control " id="inputName" name="sub"
                        placeholder="{{ __('Tour SubHead') }}"
                        value="{{ old('sub') }}@isset($tour){{ $tour->sub }}@endisset"
                        required>
                </div>
                <div class="mb-3 mx-3">
                    <label for="inputDescription" class="form-label mx-2">Description</label>
                    <textarea type="text" class="form-control " id="inputName" name="description"
                        placeholder="{{ __('Desicription') }}"
                        required>{{ old('description') }}@isset($tour){{ $tour->description }}@endisset</textarea>
                </div>
                <div class="mb-3 mx-3">
                    <label for="inputPrice" class="form-label mx-2">Price</label>
                    <input type="number" class="form-control " id="inputPrice" name="price"
                        placeholder="{{ __('Price') }}"
                        value="{{ old('price') }}@isset($tour){{ $tour->price }}@endisset"
                        required>
                </div>
                <div class="mb-3 mx-3  mt-4" data-toggle="buttons-checkbox">
                    <div id="tab" class="form-check form-check-inline btn-group mt-2 mx-2">
                        <label class=" form-check-label btn btn-large btn-danger p-2" data-toggle="tab"
                            for="inputHighlight">
                            <input type="hidden" name="highlight" value="0">
                            <input class="form-check-checkbox" type="checkbox" name="highlight"
                                value="{{ old('highlight') ?? 1 }}" @isset($tour)
                                @if ($tour->highlight == '1') checked @endif @endisset id="inputHighlight"> Make
                            Highlight</label>

                    </div>
                </div>
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-success btn-lg px-5 m-3">

                        @isset($create)
                            Create New Tour
                        @endisset
                        @isset($edit)
                            Update Tour
                        @endisset
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
