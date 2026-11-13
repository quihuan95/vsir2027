@extends('layout.index')

@section('title', 'Updating')

@push('styles')
  <style>
    .updating-section {
      padding: 40px 0 120px;
    }

    .updating-card {
      max-width: 720px;
      margin: 0 auto;
      text-align: center;
      background: #ffffff;
      box-shadow: 0 0 30px rgba(11, 12, 48, 0.1);
      padding: 56px 40px;
    }

    .updating-card .eyebrow {
      color: #ec1f23;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      margin-bottom: 12px;
    }

    .updating-card h2 {
      color: #171822;
      font-size: 36px;
      font-weight: 700;
      margin-bottom: 16px;
    }

    .updating-card p {
      color: #6a6b7c;
      font-size: 16px;
      line-height: 1.7;
      margin-bottom: 8px;
    }
  </style>
@endpush

@section('content')
  <section class="breadcrumb-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb-text">
            <h2>VSIR 2027</h2>
            <div class="bt-option">
              <a href="{{ route('home') }}">Home</a>
              <span>Updating</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="updating-section">
    <div class="container">
      <div class="updating-card">
        <div class="eyebrow">VSIR 2027</div>
        <h2>Đang cập nhật</h2>
        <p>Nội dung trang đang được cập nhật. Vui lòng quay lại sau.</p>
        <p>This page is being updated. Please check back soon.</p>
      </div>
    </div>
  </section>
@endsection
