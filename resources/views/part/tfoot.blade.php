@if ($paginator->lastPage() > 1)
    <div class="row">
        <div class="col-sm-7">
            <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                <ul class="pagination">
                    <li class="paginate_button previous  {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}"
                        id="example2_previous"><a
                                href="{{ ($paginator->currentPage() == 1) ? 'javascript:void(0);' : $paginator->url(1) }}"
                                aria-controls="example2" data-dt-idx="0" tabindex="0"><i
                                    class="fa fa-angle-double-left"></i></a></li>
                    <li class="paginate_button previous  {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}"
                        id="example2_previous"><a
                                href="{{ ($paginator->currentPage() == 1) ? 'javascript:void(0);' : $paginator->url($paginator->currentPage()-1) }}"
                                aria-controls="example2" data-dt-idx="0" tabindex="0"><i
                                    class="fa fa-angle-left"></i></a></li>

                    @for ($i = 1; $i<=$paginator->lastPage(); $i++)
                        @if($i<($paginator->currentPage()+3) && $i>($paginator->currentPage()-3))
                            <li class="paginate_button {{ ($paginator->currentPage() == $i) ? ' active' : '' }}"><a
                                        href="{{ $paginator->url($i) }}" aria-controls="example2" data-dt-idx="1"
                                        tabindex="0">{{ $i }}</a></li>
                        @endif
                    @endfor
                    <li class="paginate_button next {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}"
                        id="example2_next">
                        <a href="{{ ($paginator->currentPage() == $paginator->lastPage()) ?'javascript:void(0);':$paginator->url($paginator->currentPage()+1) }}"
                           aria-controls="example2" data-dt-idx="7" tabindex="0"><i class="fa fa-angle-right"></i></a>
                    </li>
                    <li class="paginate_button next {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}"
                        id="example2_next">
                        <a href="{{ ($paginator->currentPage() == $paginator->lastPage()) ?'javascript:void(0);':$paginator->url($paginator->lastPage()) }}"
                           aria-controls="example2" data-dt-idx="7" tabindex="0"><i
                                    class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
@endif
