{{-- <div> --}}
    <form id="create-construction-project-form"
            autocomplete="off"
            class="needs-validation"
            wire:submit.prevent="save">
        <div class="row">
            <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Título</label>
                                    <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                                    <input type="text" class="form-control d-none" id="product-id-input">
                                    {{-- <input type="text" class="form-control" id="product-title-input" value="" placeholder="Enter product title" required> --}}
                                    <input type="text"
                                        class="form-control @error('title') is-invalid @enderror"
                                        id="product-title-input"
                                        placeholder="Enter product title"
                                        wire:model.defer="title"
                                        required>
                                    <div class="invalid-feedback">Please Enter a product title.</div>
                                </div>
                            </div>
                            <div wire:ignore>
                                <label for="description" class="form-label">Descrição</label>

                                {{-- <div id="ckeditor-classic">
                                    <p>Tommy Hilfiger men striped pink sweatshirt. Crafted with cotton. Material composition is 100% organic cotton. This is one of the world's leading designer lifestyle brands and is internationally recognized for celebrating the essence of classic American cool style, featuring preppy with a twist designs.</p>
                                    <ul>
                                        <li>Full Sleeve</li>
                                        <li>Cotton</li>
                                        <li>All Sizes available</li>
                                        <li>4 Different Color</li>
                                    </ul>
                                </div> --}}

                                <textarea
                                    id="description"
                                    class="form-control ckeditor"
                                    rows="6"
                                    wire:model.defer="description"   {{-- if you want to bind to Livewire --}}
                                    placeholder="Descrição da obra"
                                ></textarea>

                            </div>
                        </div>
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Galeria</h5>
                        </div>

                        <div class="card-body">

                            {{-- <div class="mb-4">
                                <h5 class="fs-14 mb-1">Main Image</h5>
                                <p class="text-muted">Adicionar Imagem Principal</p>
                                <div class="text-center">
                                    <div class="position-relative d-inline-block">
                                        <div class="position-absolute top-100 start-100 translate-middle">
                                            <label for="product-image-input" class="mb-0"  data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                <div class="avatar-xs">
                                                    <div class="avatar-title bg-light border rounded-circle text-muted cursor-pointer">
                                                        <i class="ri-image-fill"></i>
                                                    </div>
                                                </div>
                                            </label>
                                            <input class="form-control d-none" value="" id="product-image-input" type="file"
                                                accept="image/png, image/gif, image/jpeg">
                                        </div>
                                        <div class="avatar-lg">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="" id="product-img" class="avatar-md h-auto" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

                            <div class="mb-4">
                                <h5 class="fs-14 mb-1">Main Image</h5>
                                <p class="text-muted">Adicionar Imagem Principal</p>

                                <input type="file" class="form-control" wire:model="main_image">

                                @error('main_image')
                                    <div class="text-danger small mt-1">{{ $message }}</div>
                                @enderror

                                <div class="mt-3">
                                    {{-- New upload preview --}}
                                    @if (isset($main_image) && $main_image)
                                        <img src="{{ $main_image->temporaryUrl() }}"
                                            class="img-thumbnail"
                                            style="max-height: 150px;">
                                    {{-- Existing file on edit --}}
                                    @elseif($project)
                                        @php
                                            $mainPath = collect($existingImages)->first(fn($p) => str_contains($p, 'main.'));
                                        @endphp

                                        @if ($mainPath)
                                            <img src="{{ asset('storage/'.$mainPath) }}"
                                                class="img-thumbnail"
                                                style="max-height: 150px;">
                                        @endif
                                    @endif
                                </div>
                            </div>


                            <div>
                                <h5 class="fs-14 mb-1">Galeria da Obra</h5>
                                <p class="text-muted">Adicionar imagens da galeria da obra</p>

                                {{-- <div class="dropzone">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple="multiple">
                                    </div>
                                    <div class="dz-message needsclick">
                                        <div class="mb-3">
                                            <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
                                        </div>

                                        <h5>Drop files here or click to upload.</h5>
                                    </div>
                                </div>

                                <ul class="list-unstyled mb-0" id="dropzone-preview">
                                    <li class="mt-2" id="dropzone-preview-list">
                                        <!-- This is used as the file preview template -->
                                        <div class="border rounded">
                                            <div class="d-flex p-2">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar-sm bg-light rounded">
                                                        <img data-dz-thumbnail class="img-fluid rounded d-block" src="#" alt="Product-Image" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="pt-1">
                                                        <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                        <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                        <strong class="error text-danger" data-dz-errormessage></strong>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0 ms-3">
                                                    <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul> --}}

                                {{-- Existing images on EDIT --}}
@if (!empty($existingImages))
    <div class="mb-3 d-flex flex-wrap gap-2">
        @foreach ($existingImages as $path)
            <div class="position-relative">
                <img src="{{ asset('storage/'.$path) }}"
                     class="img-thumbnail"
                     style="width: 120px; height: 120px; object-fit: cover;">
                <button type="button"
                        class="btn btn-sm btn-danger position-absolute top-0 end-0"
                        wire:click="deleteExistingImage('{{ $path }}')">
                    &times;
                </button>
            </div>
        @endforeach
    </div>
@endif

{{-- Dropzone area for new images --}}
<div class="dropzone" id="project-dropzone">
    <div class="dz-message needsclick">
        <div class="mb-3">
            <i class="display-4 text-muted ri-upload-cloud-2-fill"></i>
        </div>
        <h5>Drop files here or click to upload.</h5>
    </div>
</div>

<ul class="list-unstyled mb-0" id="dropzone-preview">
    <li class="mt-2" id="dropzone-preview-list">
        <div class="border rounded">
            <div class="d-flex p-2">
                <div class="flex-shrink-0 me-3">
                    <div class="avatar-sm bg-light rounded">
                        <img data-dz-thumbnail class="img-fluid rounded d-block"
                             src="#" alt="Product-Image" />
                    </div>
                </div>
                <div class="flex-grow-1">
                    <div class="pt-1">
                        <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                        <p class="fs-13 text-muted mb-0" data-dz-size></p>
                        <strong class="error text-danger" data-dz-errormessage></strong>
                    </div>
                </div>
                <div class="flex-shrink-0 ms-3">
                    <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </li>
</ul>

                                <!-- end dropzon-preview -->
                            </div>
                            
                        </div>
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info"
                                        role="tab">
                                        General Info
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#addproduct-metadata"
                                        role="tab">
                                        Meta Data
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end card header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                                    <div class="mb-3">
                                        <label class="form-label" for="manufacturer-name-input">Manufacturer Name</label>
                                        <input type="text" class="form-control" id="manufacturer-name-input"
                                            placeholder="Enter manufacturer name">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="stocks-input">Stocks</label>
                                                <input type="text" class="form-control" id="stocks-input" placeholder="Stocks" required>
                                                <div class="invalid-feedback">Please Enter a product stocks.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="product-price-input">Price</label>
                                                <div class="input-group has-validation mb-3">
                                                    <span class="input-group-text" id="product-price-addon">$</span>
                                                    <input type="text" class="form-control" id="product-price-input" placeholder="Enter price" aria-label="Price" aria-describedby="product-price-addon" required>
                                                    <div class="invalid-feedback">Please Enter a product price.</div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="product-discount-input">Discount</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="product-discount-addon">%</span>
                                                    <input type="text" class="form-control" id="product-discount-input" placeholder="Enter discount" aria-label="discount" aria-describedby="product-discount-addon">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="orders-input">Orders</label>
                                                <input type="text" class="form-control" id="orders-input" placeholder="Orders" required>
                                                <div class="invalid-feedback">Please Enter a product orders.</div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end tab-pane -->

                                <div class="tab-pane" id="addproduct-metadata" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="meta-title-input">Meta title</label>
                                                <input type="text" class="form-control" placeholder="Enter meta title" id="meta-title-input">
                                            </div>
                                        </div>
                                        <!-- end col -->

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label" for="meta-keywords-input">Meta Keywords</label>
                                                <input type="text" class="form-control" placeholder="Enter meta keywords" id="meta-keywords-input">
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <div>
                                        <label class="form-label" for="meta-description-input">Meta Description</label>
                                        <textarea class="form-control" id="meta-description-input" placeholder="Enter meta description" rows="3"></textarea>
                                    </div>
                                </div>
                                <!-- end tab pane -->
                            </div>
                            <!-- end tab content -->
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                    <div class="text-end mb-3">
                        <button type="submit" class="btn btn-primary w-sm">Submit</button>
                    </div>
            </div>
            <!-- end col -->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Publish</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="choices-publish-status-input" class="form-label">Estado</label>

                            <select class="form-select"
                                    id="choices-publish-status-input"
                                    data-choices data-choices-search-false
                                    wire:model.defer="status">
                                <option value="Published" selected>Publicado</option>
                                <option value="Scheduled">Agendado</option>
                                <option value="Draft">Rascunho</option>
                            </select>
                        </div>

                        <div>
                            <label for="choices-publish-visibility-input" class="form-label">Visibilidade</label>
                            <select class="form-select"
                                    id="choices-publish-visibility-input"
                                    data-choices data-choices-search-false
                                    wire:model.defer="visibility">
                                <option value="Public" selected>Público</option>
                                <option value="Hidden">Ocultado</option>
                            </select>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Agendamento de Publicação</h5>
                    </div>
                    <!-- end card body -->
                    <div class="card-body">
                        <div>
                            <label for="datepicker-publish-input" class="form-label">Data e Hora</label>
                            <input type="text" id="datepicker-publish-input" class="form-control"
                                placeholder="Enter publish date" data-provider="flatpickr" data-date-format="d.m.y"
                                data-enable-time>
                        </div>

                        {{-- Date --}}
                        {{-- <div>
                            <label for="exampleInputdate" class="form-label">Input Date</label>
                            <input type="date" class="form-control" id="exampleInputdate">
                        </div> --}}

                        {{-- Time --}}
                        {{-- <div>
                            <label for="exampleInputtime" class="form-label">Input Time</label>
                            <input type="time" class="form-control" id="exampleInputtime" value="08:56 AM">
                        </div> --}}

                    </div>
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product Categories</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-2"> <a href="#" class="float-end text-decoration-underline">Add
                            New</a>Select product category</p>
                            <select class="form-select" id="choices-category-input" name="choices-category-input" data-choices data-choices-search-false>
                                <option value="Appliances">Appliances</option>
                                <option value="Automotive Accessories">Automotive Accessories</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Grocery">Grocery</option>
                                <option value="Kids">Kids</option>
                                <option value="Watches">Watches</option>
                            </select>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Product Tags</h5>
                    </div>
                    <div class="card-body">
                        <div class="hstack gap-3 align-items-start">
                            <div class="flex-grow-1">
                                <input class="form-control" data-choices data-choices-multiple-remove="true" placeholder="Enter tags" type="text"
                            value="Cotton" />
                            </div>
                        </div>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Descrição Curta</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-muted mb-2">Adicionar descrição curta</p>
                        {{-- <textarea class="form-control" placeholder="Must enter minimum of a 100 characters" rows="3"></textarea> --}}
                        <textarea class="form-control"
                                  rows="6"
                                  wire:model.defer="short_description"
                                  placeholder="Descrição da obra"></textarea>
                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->

            </div>
        </div>
        <!-- end row -->
    </form>
{{-- </div> --}}
