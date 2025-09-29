

<!-- Address and Phone -->
<div class="address-phone-number">
  <div class="address-name">

    <div class="address-name-input-icon">
      [text* team-address class:team-address-input placeholder "Enter team address"]
      <div class="address-name-icon">
        <!-- location icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
          <path d="M10.417 1.66669C6.96699 1.66669 4.16699 4.46669 4.16699 7.91669C4.16699 10.8378 6.47825 14.0286 8.29038 16.0819L8.58824 16.3973C9.57899 17.4462 11.2495 17.441 12.2337 16.3859L12.8462 15.7295C14.6006 13.675 16.667 10.6756 16.667 7.91669C16.667 4.46669 13.867 1.66669 10.417 1.66669Z" stroke="#F65600" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M10.4163 10.1579C11.9121 10.1579 13.1247 8.94534 13.1247 7.44954C13.1247 5.95378 11.9121 4.74121 10.4163 4.74121C8.92059 4.74121 7.70801 5.95378 7.70801 7.44954C7.70801 8.94534 8.92059 10.1579 10.4163 10.1579Z" stroke="#F65600" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
    </div>
  </div>

  <div class="team-phone">
    <label class="team-phone-label">Phone Number</label>
    <div class="team-phone-input-icon">
      [tel* team-phone class:team-phone-input placeholder "Enter your phone number"]
      <div class="team-phone-icon">
        <!-- phone icon -->
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
          <path d="M6.63188 3.76019L6.29633 3.00521C6.07693 2.51157 5.96723 2.26473 5.80317 2.07584C5.59756 1.83912 5.32956 1.66495 5.02973 1.57321C4.79049 1.5 4.52038 1.5 3.98017 1.5C3.18992 1.5 2.7948 1.5 2.46311 1.65191C2.07239 1.83085 1.71953 2.2194 1.57894 2.6255C1.45959 2.97024 1.49378 3.32453 1.56215 4.03308C2.28992 11.5752 6.42485 15.7101 13.9669 16.4378C14.6755 16.5062 15.0298 16.5404 15.3745 16.4211C15.7806 16.2805 16.1691 15.9276 16.3481 15.5369C16.5 15.2052 16.5 14.8101 16.5 14.0198C16.5 13.4796 16.5 13.2095 16.4268 12.9702C16.335 12.6704 16.1609 12.4024 15.9241 12.1968C15.7353 12.0327 15.4885 11.9231 14.9948 11.7037L14.2398 11.3681C13.7052 11.1305 13.4379 11.0117 13.1663 10.9859C12.9063 10.9612 12.6442 10.9977 12.4009 11.0924C12.1466 11.1914 11.922 11.3787 11.4725 11.7532C11.0251 12.126 10.8015 12.3124 10.5281 12.4122C10.2858 12.5007 9.96546 12.5336 9.7103 12.4959C9.42238 12.4535 9.20196 12.3358 8.76105 12.1001C7.38938 11.3671 6.63294 10.6107 5.89989 9.23892C5.66428 8.79808 5.54648 8.57758 5.50406 8.28975C5.46645 8.0345 5.49923 7.71417 5.58775 7.47192C5.6876 7.19857 5.87401 6.97488 6.24682 6.5275C6.62135 6.07807 6.80861 5.85335 6.90762 5.59909C7.00237 5.35578 7.03885 5.09367 7.01412 4.83373C6.98828 4.5621 6.86948 4.2948 6.63188 3.76019Z" stroke="#F65600" stroke-width="1.25" stroke-linecap="round"/>
        </svg>
      </div>
    </div>
  </div>
</div>

<!-- KCBS Member -->
<div class="kcbs-member-phone-number">
  <div class="kcbs-member">
    <label class="kcbs-member-label">Are you a KCBS Member?</label>
    <div class="kcbs-member-input-icon">
      [select* kcbs-member class:kcbs-member-input "Yes" "No"]
    </div>
  </div>

  <div class="kcbs-phone">
    <label class="kcbs-phone-label">Head Cook KCBS Number</label>
    <div class="kcbs-phone-input-icon">
      [text kcbs-number class:kcbs-number-input minlength:10 maxlength:20 placeholder "Head cook KCBS number"]
    </div>
  </div>
</div>

<!-- Agreement & Extra options -->
<div class="read-checkbox-rule">
  <label class="read-checkbox-rule-label">I have read and agree to the smoke-n-wings Competition Rules</label>
  <div class="read-checkbox-rule-input">
    [checkbox* read-rules class:read-rules use_label_element "Yes" "No"]
  </div>
</div>

<div class="serve-food-help">
  <label class="serve-food-help-label">
    TO HELP US PROMOTE THIS EVENT AND OUR FUNDRAISER TO THE PUBLIC, MY TEAM WOULD LIKE TO SERVE FOOD ON FRIDAY NIGHT FROM 5-7PM. 100% OF SALES FROM FOOD REMAINS WITH THE TEAM.
  </label>
  <div class="serve-food-help-input">
    [checkbox* serve-food-help class:serve-food-help use_label_element "Yes - My team would like to serve food" "No"]
  </div>
</div>

<div class="team-help-kid-prepare">
  <label class="team-help-kid-prepare-label">
    MY TEAM WOULD BE WILLING TO MENTOR AN OLDER DIVISION KIDS-Q CONTESTANT FOR 30 MINUTES IMMEDIATELY FOLLOWING THE COOKS MEETING.
  </label>
  <div class="team-help-kid-prepare-input">
    [checkbox* team-help-kid-prepare class:team-help-kid-prepare use_label_element "YES – MY TEAM WOULD LOVE TO HELP A KID PREPARE FOR THE KIDS-Q" "No"]
  </div>
</div>

[acceptance acceptance-rules class:acceptance-rule-text]
I UNDERSTAND THAT POWER WILL NOT BE PROVIDED AND I NEED TO PROVIDE MY OWN POWER SOURCE.
[/acceptance]

[submit "Submit"]