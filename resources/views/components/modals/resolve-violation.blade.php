<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="{{ $id }}Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content border-0 shadow">
            <div class="modal-header border-0 pb-0 justify-content-center">
                <div class="text-success fs-1">
                    <i class="bi bi-check-circle-fill"></i>
                </div>
            </div>

            <div class="modal-body text-center px-4">
                <h5 class="fw-bold mb-2" id="{{ $id }}Label">Resolve Violation</h5>
                <p class="text-muted mb-0">
                    You are about to mark case
                    <span class="text-primary fw-bold">{{ $record->formatCaseId() }}</span>
                    as <strong>resolved</strong>.
                    This action <strong>cannot be undone</strong>.
                </p>
            </div>

            <form action="{{ route('admin.violations-management.resolve', $record) }}" method="POST">
                @csrf
                <div class="modal-footer justify-content-center border-0 pt-0 pb-4">
                    <button type="button" class="btn btn-light px-4" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button type="submit" class="btn btn-success px-4">
                        <i class="bi bi-check2-square me-1"></i>
                        Confirm
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>