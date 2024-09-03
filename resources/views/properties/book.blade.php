@include('layouts.user.header')
@include('layouts.user.body')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>


    #concept .container {
        text-align: center;
    }

    #concept .grid-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    #concept .grid-item {
        margin: 15px;
    }

    #concept .article-item {
        max-width: 380px;
        border: 1px solid #ccc;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    #concept .article-item:hover {
        transform: translateY(-5px);
    }

    #concept .article-img img {
        width: 100%;
        height: auto;
        max-width: 380px; /* Limit the maximum width of the image */
        max-height: 215px; /* Limit the maximum height of the image */
    }
    #concept .content {
        padding: 15px;
    }

    #concept .content h3 {
        margin-top: 0;
        margin-bottom: 10px;
        font-size: 20px;
    }

    #concept .content p {
        margin: 0;
        font-size: 16px;
        color: black;

    }

    </style>
<style>
    .box-card {
        width: 380px; /* Set the width of the card */
    }

    .box-card .article-img {
        width: 100%; /* Make sure the image fills the entire width of the card */
        height: 215px; /* Set the height of the image */
        overflow: hidden; /* Hide any overflowing content */
    }

    .box-card .article-img img {
        width: 100%; /* Make sure the image fills the entire width of its container */
        height: auto; /* Let the browser calculate the height based on the image's aspect ratio */
    }
</style>

<section class="sec-pad jq-section" id="concept">
    <div class="container">
        <div class="sec-head">
            <h2 class="sec-title">Concepts</h2>
        </div>
        <div class="grid-container">
            @foreach($concepts as $concept)
            <div class="grid-item" data-animation="fadeInUp" data-delay="100">
                <div class="article-item box-card">
                    <figure class="article-img">
                        <img class="modal-trigger" src="{{ asset('images/concept/' . $concept->image) }}" alt="Concept Image">
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="sec-pad jq-section" id="concept">
    <div class="container">
        <div class="sec-head">
            <h2 class="sec-title">Amenities</h2>
            <div>
                <p><i class="fas fa-bed fa-lg"></i> 2 bedrooms </p>
                <p><i class="fas fa-project-diagram fa-lg"></i> 59 sq m</p>
            </div>
        </div>
        <div class="grid-container">
            @foreach($amenities as $amenity)
            <div class="grid-item" data-animation="fadeInUp" data-delay="100">
                <div class="article-item box-card">
                    <figure class="article-img">
                        <img class="modal-trigger" src="{{ asset('images/amenity/' . $amenity->image) }}" alt="Amenity Image">
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

                            <div class="property-layout-main-content">
                                <div class="property-concept">
                                    <div class="property-concept-content-container">
                                        <h1 style="display:none">RFO Condo in Makati City</h1>
                                        <h3>Concept</h3>
                                        <h2>Experience a one-of-a-kind lifestyle in the heart of the city</h2>
                                        <div class="property-concept-details">&quot;Experience a one-of-a-kind lifestyle in the heart of the city Condo-village in the city. One Antonio is Avida’s first residential condominium development that features a distinct 6-storey low-rise, low-density design. Here, residents can revel in a secured and exclusive village-like living right in the heart of the city with 60% of its land area dedicated to shared open spaces and refreshing greenery. With an atypical T-shaped layout that allows for spacious single-loaded corridors and atriums throughout the development, there’s more than enough room to create meaningful connections within.&quot;HLURB LTS No. 034826 HLURB AA-STR-092619-0275</div>
                                    </div>
                                </div>
                            </div>
                            <div class="property-layout-details-info-container mobile-visible">
                                <h5>
                                    <strong>Interested</strong>
                                    in this property?
                                </h5>
                                <p class="property-layout-details-info">Explore our available units and learn how much you can save using the loan calculator</p>
                                <div class="button-container">
                                    <button type="button" class="property-layout-details-info-button">Inquire About This Property</button>
                                    <a href="https://cal.bpihousingloans.com/loan-calculator/bpi-family-housing-loan" target="_blank" rel="noopener noreferrer" class="property-layout-details-info-button">Loan Calculator</a>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
                <section class="newsletter-section">
                    <div class="newsletter-container">
                        <div class="newsletter-header">
                            <p class="newsletter-header-text">Newsletter</p>
                            <p class="newsletter-title">
                                Sign up to get <span>updates</span>
                                on latest <span>news</span>
                                and <span>promos</span>
                            </p>
                        </div>
                    </div>
                </section>
                <section class="footer-section">
                    <div class="footer-section-content" data-testid="footer-section-content">
                        <div class="footer-background-image"></div>
                        <div class="footer-avida-container">
                            <div>
                                <img class="footer-avida-icon" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMTAzcHgiIGhlaWdodD0iNDBweCIgdmlld0JveD0iMCAwIDEwMyA0MCIgdmVyc2lvbj0iMS4xIiAKICB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIAogIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIj4KICA8ZGVmcz4KICAgIDxwb2x5Z29uIGlkPSJwYXRoLTEiIHBvaW50cz0iMC4xNTc5MDY0OSAwLjA3MjE3MzI4NzggMTkuNzQ0MjI5NSAwLjA3MjE3MzI4NzggMTkuNzQ0MjI5NSAyMS4wNzUyNjg4IDAuMTU3OTA2NDkgMjEuMDc1MjY4OCI+PC9wb2x5Z29uPgogICAgPHBvbHlnb24gaWQ9InBhdGgtMyIgcG9pbnRzPSIwIDM5LjkxNjc3NDIgMTAyLjMyNDk0NiAzOS45MTY3NzQyIDEwMi4zMjQ5NDYgMCAwIDAiPjwvcG9seWdvbj4KICA8L2RlZnM+CiAgPGcgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICA8Zz4KICAgICAgPHBhdGggZD0iTTczLjQwMTU0ODQsMjkuMjgxMjA0MyBDNzMuMDk3MjQ3MywyNy42MDU1MDU0IDcyLjg4MzI2ODgsMjUuOTAzMzU0OCA3Mi40NTY4MTcyLDI0LjI1NjI1ODEgQzcyLjE1MTY1NTksMjMuMDc3NTQ4NCA3MS4zNzIwODYsMjIuMTYyOTI0NyA3MC4wODUyMDQzLDIxLjg1MDY2NjcgQzY4LjI5Mjk0NjIsMjEuNDE1NjEyOSA2Ni43MTQ2NjY3LDIyLjM5MTk1NyA2Ni4wMzI5NDYyLDI0LjQ5MDAyMTUgQzY1LjIyMTc2MzQsMjYuOTg2NTgwNiA2NS4xMTc4OTI1LDI5LjU3MjM4NzEgNjUuNTIyNDA4NiwzMi4xNDI5MjQ3IEM2NS43MTMxNjEzLDMzLjM1NTM5NzggNjYuMDU0NDUxNiwzNC42MjE2MzQ0IDY2LjY1NjYwMjIsMzUuNjc1Mzk3OCBDNjcuODQwMjU4MSwzNy43NDcyMjU4IDcwLjQ2NTIwNDMsMzcuNzIyMDY0NSA3MS43OTQ0NTE2LDM1LjczNTYxMjkgQzcyLjA4ODg2MDIsMzUuMjk1ODI4IDcyLjM2ODg2MDIsMzQuNzk5MjY4OCA3Mi40NzcyNDczLDM0LjI5MDY2NjcgQzcyLjgyNTYzNDQsMzIuNjU2MDQzIDczLjA5MDU4MDYsMzEuMDAzNTY5OSA3My40MDE1NDg0LDI5LjI4MTIwNDMgTTczLjM0NDM0NDEsMzYuNzU0MTA3NSBDNzMuMTQwOTAzMiwzNi44NjY1ODA2IDczLjAzMzU5MTQsMzYuODk0NzUyNyA3Mi45NzMzNzYzLDM2Ljk2Mzc4NDkgQzY5LjA2NTYzNDQsNDEuNDUzNjc3NCA2Mi4xODYwNjQ1LDQwLjUzNzMzMzMgNTkuNzYxMTE4MywzNS4xMTc3NjM0IEM1OC4wMzUwOTY4LDMxLjI2MDEyOSA1OC4wOTIzMDExLDI3LjI4NTI5MDMgNTkuODc3Njc3NCwyMy40NjY1ODA2IEM2Mi4xNTMxNjEzLDE4LjU5OTA1MzggNjguNDEyNzMxMiwxNy4zODk1OTE0IDcyLjUxNTk1NywyMC45MDcwMTA4IEM3Mi42NzU3NDE5LDIxLjA0NCA3Mi44MzQ4ODE3LDIxLjE4MjA2NDUgNzMuMTU4OTY3NywyMS40NjE2MzQ0IEw3My4xNTg5Njc3LDE1LjM2NzQ0MDkgTDczLjE1ODk2NzcsOS4zMzEzMTE4MyBMNzkuNjQ1NDE5NCw5LjMzMTMxMTgzIEM3OS4xOTMzNzYzLDE5LjIyNzY1NTkgNzguOTM1NTI2OSwyOS4xNTY5MDMyIDc5LjQyMjE5MzUsMzkuMTM4MTkzNSBMNzMuMTk2MTcyLDM5LjEzODE5MzUgQzczLjI0NDEyOSwzOC4zNjg5NDYyIDczLjI5MTIyNTgsMzcuNjEwMDIxNSA3My4zNDQzNDQxLDM2Ljc1NDEwNzUiIGZpbGw9IiNGRkZGRkYiPjwvcGF0aD4KICAgICAgPHBhdGggZD0iTTExLjQzMTg0OTUsMTkuMDA4MDg2IEMxMC4xOTI3MDk3LDIyLjIxOTQ4MzkgOS4wNzIwNjQ1MiwyNS4xMjQgNy45MDAyMzY1NiwyOC4xNjE2MzQ0IEwxNC43NjM2Nzc0LDI4LjE2MTYzNDQgQzEzLjY0NTYxMjksMjUuMDkwMjM2NiAxMi41OTM3ODQ5LDIyLjIwMDU1OTEgMTEuNDMxODQ5NSwxOS4wMDgwODYgTDExLjQzMTg0OTUsMTkuMDA4MDg2IFogTTE4LjQwNTM5NzgsMzkuMTA3MjI1OCBDMTcuNjMxODQ5NSwzNi43NjMzNTQ4IDE2Ljg0NDEwNzUsMzQuNDMwNDUxNiAxNi4wOTgzMDExLDMyLjA4NDY0NTIgQzE1Ljg4MzI0NzMsMzEuNDA4MDg2IDE1LjUzOTgwNjUsMzEuMTA3NjU1OSAxNC43OTY3OTU3LDMxLjExOTA1MzggQzEyLjQzMzU2OTksMzEuMTU1MTgyOCAxMC4wNjg4Mzg3LDMxLjE1MTA5NjggNy43MDUzOTc4NSwzMS4xMTMwMzIzIEM2Ljk2Mzg5MjQ3LDMxLjEwMDc3NDIgNi42MjMyNDczMSwzMS4zOTUzOTc4IDYuNDE1OTM1NDgsMzIuMDg0IEM1LjcwNjY4ODE3LDM0LjQzOTA1MzggNC45NDg2MjM2NiwzNi43Nzk0ODM5IDQuMjE1MjkwMzIsMzkuMTA2NTgwNiBMMi4xNTA1Mzc2M2UtMDUsMzkuMTA2NTgwNiBDMC42OTcwMTA3NTMsMzcuNDcxNzQxOSAxLjM4NDk2Nzc0LDM1Ljk1MzI0NzMgMS45OTc4NzA5NywzNC40MDUwNzUzIEM1LjAwOTI2ODgyLDI2Ljc5ODQwODYgOC4wMTMxMzk3OCwxOS4xODg3MzEyIDEwLjk3ODk0NjIsMTEuNTY0MjE1MSBDMTEuMjQ4NjIzNywxMC44NzA2NjY3IDExLjUxODA4NiwxMC42MjkxNjEzIDEyLjI3NDg2MDIsMTAuNzMwMDIxNSBDMTMuMDgxOTU3LDEwLjgzNzU0ODQgMTMuOTE5NTkxNCwxMC42OTczMzMzIDE0LjczNzAxMDgsMTAuNzU5MDUzOCBDMTUuMDQzMjQ3MywxMC43ODIyNzk2IDE1LjUwNDc1MjcsMTEuMDAwOTg5MiAxNS41OTk4MDY1LDExLjI0NTUwNTQgQzE5LjE3ODk0NjIsMjAuNDcwNDUxNiAyMi43MjM2Nzc0LDI5LjcwODk0NjIgMjYuMjcxNDE5NCwzOC45NDYxNTA1IEMyNi4yODI4MTcyLDM4Ljk3NTgyOCAyNi4yNjc1NDg0LDM5LjAxNTYxMjkgMjYuMjYwMjM2NiwzOS4xMDcyMjU4IEwxOC40MDUzOTc4LDM5LjEwNzIyNTggWiIgZmlsbD0iI0ZGRkZGRiI+PC9wYXRoPgogICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4Mi41ODA2NDUsIDE4Ljg0MTUwNSkiPgogICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIGZpbGw9IndoaXRlIj4KICAgICAgICAgIDx1c2UgeGxpbms6aHJlZj0iI3BhdGgtMSI+PC91c2U+CiAgICAgICAgPC9tYXNrPgogICAgICAgIDxnPjwvZz4KICAgICAgICA8cGF0aCBkPSJNMTEuMDM4NDczMSwxMC4yMTg2NjY3IEM3LjQ2MzQxOTM1LDEwLjQ2MjMyMjYgNS44MTUyNDczMSwxMi4yODM4MjggNi4yMDEwNTM3NiwxNS41NzI4NjAyIEM2LjM3MjAyMTUxLDE3LjAzMDA2NDUgNy4yMDUxMzk3OCwxNy44NjQwNDMgOC41MzU2Nzc0MiwxNy45MDk4NDk1IEM5Ljg0OTIyNTgxLDE3Ljk1NTIyNTggMTAuODkyMDIxNSwxNy4xODI1Mzc2IDExLjAwNDI3OTYsMTUuNzQ3MjY4OCBDMTEuMTQ2LDEzLjkzOTc0MTkgMTEuMDM4NDczMSwxMi4xMTI4NjAyIDExLjAzODQ3MzEsMTAuMjE4NjY2NyBNMTkuNjE5OTc4NSwxOC4yMzc1OTE0IEMxOS45NTEzNzYzLDE5LjIwMDM4NzEgMTkuNjE3Mzk3OCwxOS44MTM1MDU0IDE4LjY0NzUwNTQsMjAuMDk2OTQ2MiBDMTcuNzU4OTAzMiwyMC4zNTYzMDExIDE2Ljg4NjY0NTIsMjAuNzQ3NDgzOSAxNS45ODA0MDg2LDIwLjg1NTIyNTggQzEzLjkxNTg5MjUsMjEuMTAwODE3MiAxMy4wNDQ3MDk3LDIwLjU2NzY5ODkgMTEuNDYzODQ5NSwxOC4zMzY3MzEyIEMxMC4wMTU4OTI1LDIwLjM0NDI1ODEgOC4wMjE5MTM5OCwyMS4xNTM5MzU1IDUuNjAzODQ5NDYsMjEuMDY5NDE5NCBDMi43NjQ0OTQ2MiwyMC45Njk4NDk1IDAuODUyODgxNzIsMTkuNDUxNzg0OSAwLjMxMjIzNjU1OSwxNi44MDQ5MDMyIEMtMC4yNjA2NjY2NjcsMTQuMDAxODkyNSAwLjc2MTkxMzk3OCwxMS43NjQ2ODgyIDMuMzcyNjY2NjcsMTAuNjQzMTgyOCBDNS4yNzE4MDY0NSw5LjgyNzI2ODgyIDcuMjgyMzQ0MDksOS4yNjg5ODkyNSA5LjI0NzI5MDMyLDguNjA4MTI5MDMgQzExLjEwOTg3MSw3Ljk4MTY3NzQyIDExLjM1MzMxMTgsNy43MTg0NTE2MSAxMS4yNTk1NDg0LDYuMzQ3Njk4OTIgQzExLjE0MDgzODcsNC42MTA3MDk2OCAxMC4yMzI4ODE3LDMuNDkyIDguNjgxOTEzOTgsMy4yNDEwMzIyNiBDNi41NDUzNTQ4NCwyLjg5NTQ0MDg2IDQuNjM1ODkyNDcsMy40MTAyNzk1NyAyLjk4NDI3OTU3LDQuODI5NDE5MzUgQzIuODUzNTI2ODgsNC45NDE2Nzc0MiAyLjcxMjY2NjY3LDUuMDQxNjc3NDIgMi41MjY0MzAxMSw1LjE4NjE5MzU1IEMyLjI4NTM1NDg0LDQuMzUyNDMwMTEgMi4wNjM0MTkzNSwzLjU4NDI1ODA2IDEuODA4Nzk1NywyLjcwMzYxMjkgQzQuNDMyMDIxNTEsMC42MDkyMDQzMDEgNy40ODY2NDUxNiwtMC4yMTM4MDY0NTIgMTAuODY0NzA5NywwLjE1OTA5Njc3NCBDMTEuNzc4MjU4MSwwLjI1OTk1Njk4OSAxMi43MDEyNjg4LDAuNTAyOTY3NzQyIDEzLjU1OTc2MzQsMC44MzYwODYwMjIgQzE1LjkwMjk4OTIsMS43NDU1NDgzOSAxNy4xNzIwMjE1LDMuNTAwODE3MiAxNy4xNjg3OTU3LDYuMDI3MDUzNzYgQzE3LjE2NDkyNDcsOC45Mjc2OTg5MiAxNy4wNDY2NDUyLDExLjgyODEyOSAxNi45ODE0ODM5LDE0LjcyODk4OTIgQzE2Ljk3MTgwNjUsMTUuMTU4NjY2NyAxNi45NzA5NDYyLDE1LjU4ODk4OTIgMTYuOTgxNDgzOSwxNi4wMTg2NjY3IEMxNy4wMzUwMzIzLDE4LjE5NzU5MTQgMTcuNTQ4NTgwNiwxOC42Mjc2OTg5IDE5LjYxOTk3ODUsMTguMjM3NTkxNCIgZmlsbD0iI0ZGRkZGRiIgbWFzaz0idXJsKCNtYXNrLTIpIj48L3BhdGg+CiAgICAgIDwvZz4KICAgICAgPHBhdGggZD0iTTMyLjY1MzA3NTMsMTkuMzc1NjEyOSBDMzMuOTc1MDEwOCwyMy43Njk1OTE0IDM1LjI3OTMxMTgsMjguMTA1MDc1MyAzNi41ODM2MTI5LDMyLjQ0MDc3NDIgQzM2LjcwMjk2NzcsMzIuNDU2OTAzMiAzNi44MjIzMjI2LDMyLjQ3MzI0NzMgMzYuOTQxNjc3NCwzMi40ODkzNzYzIEMzOC4zNzkzMTE4LDI4LjEyNzQ0MDkgMzkuODE3MTYxMywyMy43NjU1MDU0IDQxLjI3NTIyNTgsMTkuMzQxNjM0NCBMNDUuMDM5NzQxOSwxOS4zNDE2MzQ0IEM0Mi44NDI3NTI3LDI1LjExMTUyNjkgNDAuNjE5NzQxOSwzMC45NDIyNzk2IDM4LjQwNDkwMzIsMzYuNzc1ODI4IEMzOC4xMTQ3OTU3LDM3LjUzOTY5ODkgMzguMDc5MDk2OCwzOC42MTc3NjM0IDM3LjUzNjMwMTEsMzkuMDA2NTgwNiBDMzcuMDAzMzk3OCwzOS4zODgzMDExIDM1Ljk3MzcyMDQsMzkuMDgwNTU5MSAzNS4xNjIzMjI2LDM5LjA2ODUxNjEgQzM0LjI1NTIyNTgsMzkuMDU1MTgyOCAzMy4xMTM1MDU0LDM5LjM1OTA1MzggMzIuNTA4NTU5MSwzOC45MjI0OTQ2IEMzMS45MzAwNjQ1LDM4LjUwNTA3NTMgMzEuOTQzODI4LDM3LjMwMTYzNDQgMzEuNjM5MDk2OCwzNi40NjQ4NjAyIEMyOS42OTY3MzEyLDMxLjEyODA4NiAyNy43Mzg2NjY3LDI1Ljc5NjkwMzIgMjUuNzgzNjEyOSwyMC40NjQ2NDUyIEMyNS42NjMxODI4LDIwLjEzNjI1ODEgMjUuNTI0MjU4MSwxOS44MTQ3NTI3IDI1LjM0NzkxNCwxOS4zNzU2MTI5IEwzMi42NTMwNzUzLDE5LjM3NTYxMjkgWiIgZmlsbD0iI0ZGRkZGRiI+PC9wYXRoPgogICAgICA8bWFzayBpZD0ibWFzay00IiBmaWxsPSJ3aGl0ZSI+CiAgICAgICAgPHVzZSB4bGluazpocmVmPSIjcGF0aC0zIj48L3VzZT4KICAgICAgPC9tYXNrPgogICAgICA8Zz48L2c+CiAgICAgIDxwb2x5Z29uIGZpbGw9IiNGRkZGRkYiIG1hc2s9InVybCgjbWFzay00KSIgcG9pbnRzPSI0OC4yNDU1OTE0IDM5LjEzMDEwNzUgNTQuNjA1ODA2NSAzOS4xMzAxMDc1IDU0LjYwNTgwNjUgMTkuMzQ2MjM2NiA0OC4yNDU1OTE0IDE5LjM0NjIzNjYiPjwvcG9seWdvbj4KICAgICAgPHBhdGggZD0iTTUwLjM5NzgyOCwxNi40MjUxMzk4IEM0OS4zMDkyMjU4LDE2LjMwOTQ0MDkgNDkuMTg5NDQwOSwxNS44MjE0ODM5IDQ5LjQyNTU2OTksMTQuODgwNjIzNyBDNTAuMzU0MTcyLDExLjE3NzM5NzggNTEuMTc1MDMyMyw3LjQ0NzA3NTI3IDUyLjA1NzgyOCwzLjczMjIzNjU2IEM1Mi4zODQ5MjQ3LDIuMzU1Njc3NDIgNTIuODQ1MzU0OCwxLjAyMDE5MzU1IDU0LjI1MTgwNjUsMC4zNTc2MTI5MDMgQzU1LjUzMTgwNjUsLTAuMjQ1NjEyOTAzIDU2Ljc2MjEyOSwtMC4wODY2ODgxNzIgNTcuODQ3OTM1NSwwLjg0MTkxMzk3OCBDNTguOTUzNTI2OSwxLjc4NzUwNTM4IDU5LjE1MDUxNjEsMy4wMDU3ODQ5NSA1OC43OTU0NjI0LDQuMzUwMzAxMDggQzU4LjcxNDYwMjIsNC42NTY1Mzc2MyA1OC41OTA1MTYxLDQuOTcyMjM2NTYgNTguNDA4MzY1Niw1LjIyODE1MDU0IEM1NS43Mzc2MTI5LDguOTc3NjEyOSA1My4wNTM3NDE5LDEyLjcxNzYxMjkgNTAuMzk3ODI4LDE2LjQyNTEzOTgiIGZpbGw9IiNGRkZGRkYiIG1hc2s9InVybCgjbWFzay00KSI+PC9wYXRoPgogICAgPC9nPgogIDwvZz4KPC9zdmc+" alt="avidaIconWhite">
                                <div class="footer-avida-content">Celebrate life everyday with Avida, and experience a lifestyle that is easy, distinct, and enriching.</div>
                                <div class="footer-avida-content">With over three decades of providing sure, secure, and sensible homes in sustainable communities nationwide, Avida has become the developer of choice among the rising middle class—making dream spaces a reality while offering more than the essentials.</div>
                                <div class="footer-social-container">
                                    <a href="https://www.facebook.com/AvidaLandPH/" target="_blank" rel="noopener noreferrer">
                                        <img class="footer-social-facebook" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iOHB4IiBoZWlnaHQ9IjE1cHgiIHZpZXdCb3g9IjAgMCA4IDE1IiB2ZXJzaW9uPSIxLjEiIAogIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgCiAgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPgogIDxnIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTEyLjAwMDAwMCwgLTguMDAwMDAwKSIgZmlsbD0iI0ZGRkZGRiIgZmlsbC1ydWxlPSJub256ZXJvIj4KICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMTIuMDAwMDAwLCA4LjQwMDAwMCkiPgogICAgICAgIDxwYXRoIGQ9Ik00LjUsNC45NSBMNC41LDMuMTUgQzQuNSwyLjY1MzIgNC45MDMyLDIuMjUgNS40LDIuMjUgTDYuMywyLjI1IEw2LjMsMCBMNC41LDAgQzMuMDA4NywwIDEuOCwxLjIwODcgMS44LDIuNyBMMS44LDQuOTUgTDAsNC45NSBMMCw3LjIgTDEuOCw3LjIgTDEuOCwxNC40IEw0LjUsMTQuNCBMNC41LDcuMiBMNi4zLDcuMiBMNy4yLDQuOTUgTDQuNSw0Ljk1IFoiIGlkPSJTaGFwZSI+PC9wYXRoPgogICAgICA8L2c+CiAgICA8L2c+CiAgPC9nPgo8L3N2Zz4=" alt="fbIcon">
                                    </a>
                                    <a href="https://www.instagram.com/avidalandph" target="_blank" rel="noopener noreferrer">
                                        <img class="footer-social-instagram" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMTVweCIgaGVpZ2h0PSIxNXB4IiB2aWV3Qm94PSIwIDAgMTUgMTUiIHZlcnNpb249IjEuMSIgCiAgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiAKICB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgPGcgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtOC4wMDAwMDAsIC04LjAwMDAwMCkiIGZpbGw9IiNGRkZGRkYiIGZpbGwtcnVsZT0ibm9uemVybyI+CiAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDguNDAwMDAwLCA4LjQwMDAwMCkiPgogICAgICAgIDxwYXRoIGQ9Ik05LjksMCBMNC41LDAgQzIuMDE1MSwwIDAsMi4wMTUxIDAsNC41IEwwLDkuOSBDMCwxMi4zODQ5IDIuMDE1MSwxNC40IDQuNSwxNC40IEw5LjksMTQuNCBDMTIuMzg0OSwxNC40IDE0LjQsMTIuMzg0OSAxNC40LDkuOSBMMTQuNCw0LjUgQzE0LjQsMi4wMTUxIDEyLjM4NDksMCA5LjksMCBaIE0xMy4wNSw5LjkgQzEzLjA1LDExLjYzNyAxMS42MzcsMTMuMDUgOS45LDEzLjA1IEw0LjUsMTMuMDUgQzIuNzYzLDEzLjA1IDEuMzUsMTEuNjM3IDEuMzUsOS45IEwxLjM1LDQuNSBDMS4zNSwyLjc2MyAyLjc2MywxLjM1IDQuNSwxLjM1IEw5LjksMS4zNSBDMTEuNjM3LDEuMzUgMTMuMDUsMi43NjMgMTMuMDUsNC41IEwxMy4wNSw5LjkgWiIgaWQ9IlNoYXBlIj48L3BhdGg+CiAgICAgICAgPHBhdGggZD0iTTcuMiwzLjYgQzUuMjExOSwzLjYgMy42LDUuMjExOSAzLjYsNy4yIEMzLjYsOS4xODgxIDUuMjExOSwxMC44IDcuMiwxMC44IEM5LjE4ODEsMTAuOCAxMC44LDkuMTg4MSAxMC44LDcuMiBDMTAuOCw1LjIxMTkgOS4xODgxLDMuNiA3LjIsMy42IFogTTcuMiw5LjQ1IEM1Ljk1OTgsOS40NSA0Ljk1LDguNDQwMiA0Ljk1LDcuMiBDNC45NSw1Ljk1ODkgNS45NTk4LDQuOTUgNy4yLDQuOTUgQzguNDQwMiw0Ljk1IDkuNDUsNS45NTg5IDkuNDUsNy4yIEM5LjQ1LDguNDQwMiA4LjQ0MDIsOS40NSA3LjIsOS40NSBaIiBpZD0iU2hhcGUiPjwvcGF0aD4KICAgICAgICA8Y2lyY2xlIGlkPSJPdmFsIiBjeD0iMTEuNCIgY3k9IjMiIHI9IjEiPjwvY2lyY2xlPgogICAgICA8L2c+CiAgICA8L2c+CiAgPC9nPgo8L3N2Zz4=" alt="instaIcon">
                                    </a>
                                    <a href="https://www.youtube.com/user/avidaofficial" target="_blank" rel="noopener noreferrer">
                                        <img class="footer-social-youtube" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4KPHN2ZyB3aWR0aD0iMTVweCIgaGVpZ2h0PSIxMXB4IiB2aWV3Qm94PSIwIDAgMTUgMTEiIHZlcnNpb249IjEuMSIgCiAgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiAKICB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+CiAgPGcgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0iZXZlbm9kZCI+CiAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtOC4wMDAwMDAsIC0xMC4wMDAwMDApIiBmaWxsPSIjRkZGRkZGIiBmaWxsLXJ1bGU9Im5vbnplcm8iPgogICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg4LjQwMDAwMCwgMTAuODAwMDAwKSIgaWQ9IlNoYXBlIj4KICAgICAgICA8cGF0aCBkPSJNMTMuNzg4LDAuOTI1MDkwOTA5IEMxMy4zOTc0LDAuMjUxMzQ1NDU1IDEyLjk3MzUsMC4xMjc0MTgxODIgMTIuMTEwNCwwLjA4MDI5MDkwOTEgQzExLjI0ODIsMC4wMjM1NjM2MzY0IDkuMDgwMSwwIDcuMjAxOCwwIEM1LjMxOTksMCAzLjE1MDksMC4wMjM1NjM2MzY0IDIuMjg5NiwwLjA3OTQxODE4MTggQzEuNDI4MywwLjEyNzQxODE4MiAxLjAwMzUsMC4yNTA0NzI3MjcgMC42MDkzLDAuOTI1MDkwOTA5IEMwLjIwNywxLjU5Nzk2MzY0IDAsMi43NTY5NDU0NSAwLDQuNzk3MzgxODIgQzAsNC43OTkxMjcyNyAwLDQuOCAwLDQuOCBDMCw0LjgwMTc0NTQ1IDAsNC44MDI2MTgxOCAwLDQuODAyNjE4MTggTDAsNC44MDQzNjM2NCBDMCw2LjgzNjA3MjczIDAuMjA3LDguMDAzNzgxODIgMC42MDkzLDguNjY5NjcyNzMgQzEuMDAzNSw5LjM0MzQxODE4IDEuNDI3NCw5LjQ2NTYgMi4yODg3LDkuNTIyMzI3MjcgQzMuMTUwOSw5LjU3MTIgNS4zMTk5LDkuNiA3LjIwMTgsOS42IEM5LjA4MDEsOS42IDExLjI0ODIsOS41NzEyIDEyLjExMTMsOS41MjMyIEMxMi45NzQ0LDkuNDY2NDcyNzMgMTMuMzk4Myw5LjM0NDI5MDkxIDEzLjc4ODksOC42NzA1NDU0NSBDMTQuMTk0OCw4LjAwNDY1NDU1IDE0LjQsNi44MzY5NDU0NSAxNC40LDQuODA1MjM2MzYgQzE0LjQsNC44MDUyMzYzNiAxNC40LDQuODAyNjE4MTggMTQuNCw0LjgwMDg3MjczIEMxNC40LDQuODAwODcyNzMgMTQuNCw0Ljc5OTEyNzI3IDE0LjQsNC43OTgyNTQ1NSBDMTQuNCwyLjc1Njk0NTQ1IDE0LjE5NDgsMS41OTc5NjM2NCAxMy43ODgsMC45MjUwOTA5MDkgWiBNNS40LDcuNDE4MTgxODIgTDUuNCwyLjE4MTgxODE4IEw5LjksNC44IEw1LjQsNy40MTgxODE4MiBaIj48L3BhdGg+CiAgICAgIDwvZz4KICAgIDwvZz4KICA8L2c+Cjwvc3ZnPg==" alt="youtubeIcon">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="footer-agreement">
                                    <a class="footer-agreement-links" href="/privacy-notice/">Privacy Notice</a>
                                    <span class="dot-separator">•</span>
                                    <a class="footer-agreement-links" href="/terms-and-conditions/">Terms and Conditions</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-details-container">
                            <div class="hotline-container">
                                <h3>Get In Touch</h3>
                                <div>
                                    <p class="hotline-container-details">You may get in touch with us through the contact numbers below:</p>
                                    <p class="hotline-container-details">Sales Hotline:</p>
                                    <p class="hotline-container-numbers">(+632) 8848-5000</p>
                                </div>
                                <div>
                                    <p class="hotline-container-details">Head Office Trunk line:</p>
                                    <p class="hotline-container-numbers">(+632) 89882111</p>
                                </div>
                                <div>
                                    <p class="hotline-container-link">
                                        <a href="/contact-us/showroom/south-luzon/">Click here for our offices &amp;showrooms</a>
                                    </p>
                                </div>
                            </div>
                            <div class="footer-navlinks">
                                <h3>Useful Links</h3>
                                <div class="footer-link">
                                    <div class="footer-link-container">
                                        <div class="footer-link-group">
                                            <div>
                                                <a href="/properties/">Properties</a>
                                            </div>
                                            <div>
                                                <a href="/neighborhoods/">Neighborhoods</a>
                                            </div>
                                            <div>
                                                <a href="/buyers-guide/">Buyer &#x27;s Guide</a>
                                            </div>
                                            <div>
                                                <a href="/news-and-events/">News &amp;Events</a>
                                            </div>
                                        </div>
                                        <div class="footer-link-group">
                                            <div>
                                                <a href="/pursuit-of-passion/">Pursuit of Passion</a>
                                            </div>
                                            <div>
                                                <a href="/about-us/">About Us</a>
                                            </div>
                                            <div>
                                                <a href="/contact-us/">Contact Us</a>
                                            </div>
                                            <div>
                                                <a href="/privacy-notice/">Privacy Notice</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-navlinks-container">
                                    <div class="footer-group">
                                        <div>
                                            <a href="/properties/">Properties</a>
                                        </div>
                                        <div>
                                            <a href="/neighborhoods/">Neighborhoods</a>
                                        </div>
                                        <div>
                                            <a href="/buyers-guide/">Buyer &#x27;s Guide</a>
                                        </div>
                                        <div>
                                            <a href="/news-and-events/">News &amp;Events</a>
                                        </div>
                                    </div>
                                    <div class="footer-group">
                                        <div>
                                            <a href="/pursuit-of-passion/">Pursuit of Passion</a>
                                        </div>
                                        <div>
                                            <a href="/about-us/">About Us</a>
                                        </div>
                                        <div>
                                            <a href="/contact-us/">Contact Us</a>
                                        </div>
                                        <div>
                                            <a href="/privacy-notice/">Privacy Notice</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>

            </div>
            <div id="gatsby-announcer" style="position:absolute;top:0;width:1px;height:1px;padding:0;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0" aria-live="assertive" aria-atomic="true"></div>
        </div>
        {{-- <script id="gatsby-script-loader">
            window.pagePath = "/properties/one-antonio/"
        </script> --}}


    </body>
</html>
