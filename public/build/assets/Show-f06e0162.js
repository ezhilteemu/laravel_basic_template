import{_ as c}from"./AppLayout-8df6cb9f.js";import p from"./DeleteUserForm-0d8de334.js";import l from"./LogoutOtherBrowserSessionsForm-51f0f145.js";import{S as s}from"./SectionBorder-a3bdedec.js";import f from"./TwoFactorAuthenticationForm-91f81c55.js";import u from"./UpdatePasswordForm-df010083.js";import _ from"./UpdateProfileInformationForm-da6b6b80.js";import{c as d,w as n,o,a as i,e as r,b as t,f as a,F as h}from"./app-54871e19.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./DialogModal-6d7eba41.js";import"./SectionTitle-443d3766.js";import"./DangerButton-53cf1563.js";import"./TextInput-63a71629.js";import"./SecondaryButton-336954e8.js";import"./ActionMessage-63b1c572.js";import"./PrimaryButton-4f7825d4.js";import"./InputLabel-ae2502c9.js";import"./FormSection-cc0e83a7.js";const g=i("h2",{class:"font-semibold text-xl text-gray-800 leading-tight"}," Profile ",-1),$={class:"max-w-7xl mx-auto py-10 sm:px-6 lg:px-8"},w={key:0},k={key:1},y={key:2},z={__name:"Show",props:{confirmsTwoFactorAuthentication:Boolean,sessions:Array},setup(m){return(e,x)=>(o(),d(c,{title:"Profile"},{header:n(()=>[g]),default:n(()=>[i("div",null,[i("div",$,[e.$page.props.jetstream.canUpdateProfileInformation?(o(),r("div",w,[t(_,{user:e.$page.props.auth.user},null,8,["user"]),t(s)])):a("",!0),e.$page.props.jetstream.canUpdatePassword?(o(),r("div",k,[t(u,{class:"mt-10 sm:mt-0"}),t(s)])):a("",!0),e.$page.props.jetstream.canManageTwoFactorAuthentication?(o(),r("div",y,[t(f,{"requires-confirmation":m.confirmsTwoFactorAuthentication,class:"mt-10 sm:mt-0"},null,8,["requires-confirmation"]),t(s)])):a("",!0),t(l,{sessions:m.sessions,class:"mt-10 sm:mt-0"},null,8,["sessions"]),e.$page.props.jetstream.hasAccountDeletionFeatures?(o(),r(h,{key:3},[t(s),t(p,{class:"mt-10 sm:mt-0"})],64)):a("",!0)])])]),_:1}))}};export{z as default};