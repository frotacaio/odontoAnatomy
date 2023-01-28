<template>
    <div class="my-6 mx-8">
        <a-steps :current="current">
            <a-step v-for="item in steps" :key="item.title" :title="item.title" />
        </a-steps>
        <div class="mt-4 rounded-md border-dashed border-1 border-gray-100 border-l-50 ml-8 mr-8" :style="{'background-image':`url(${steps[current].content})`}">
            <div class="h-screen flex" v-if="steps[current].img==1">
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="ml-28 mt-48" >
                        <template #content>
                            <a-input-group compact>
                                <a-input/>
                                <a-button type="primary" class="mt-2">Enviar</a-button>
                            </a-input-group>
                        </template>
                        <a-button class="text-sm">Responda</a-button>
                    </a-popover>
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="ml-20 mt-96" >
                        <template #content>
                            <a-input-group compact>
                                <a-input/>
                                <a-button type="primary" class="mt-2">Enviar</a-button>
                            </a-input-group>
                        </template>
                        <a-button>Responda</a-button>
                    </a-popover>
                </div>
                <div class="w-1/5">
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-24" >
                        <template #content>
                            <a-input-group compact>
                                <a-input/>
                                <a-button type="primary" class="mt-2">Enviar</a-button>
                            </a-input-group>
                        </template>
                        <a-button>Responda</a-button>
                    </a-popover>
                </div>
                <div class="w-1/5">
                    <a-popover title="Resposta" trigger="hover" placement="bottom" class="ml-3" >
                        <template #content>
                            <a-input-group compact>
                                <a-input/>
                                <a-button type="primary" class="mt-2">Enviar</a-button>
                            </a-input-group>
                        </template>
                        <a-button>Responda</a-button>
                    </a-popover>
                    <div>
                        <a-popover title="Resposta" trigger="hover" placement="bottom" class="mt-36" >
                            <template #content>
                                <a-input-group compact>
                                    <a-input/>
                                    <a-button type="primary" class="mt-2">Enviar</a-button>
                                </a-input-group>
                            </template>
                            <a-button>Responda</a-button>
                        </a-popover>
                    </div>
                </div>
      
            </div>
            <div class="h-screen flex" v-if="steps[current].img==2">
            </div>
        </div>
        <div class="mt-4">
            <a-button v-if="current < steps.length - 1" type="primary" @click="next">Próxima</a-button>
            <a-button
                v-if="current == steps.length - 1"
                type="primary"
            >
                Feito
            </a-button>
            <a-button v-if="current > 0" style="margin-left: 8px" @click="prev">Anterior</a-button>
        </div>
  </div>
</template>
<script setup>
    import { ref } from 'vue';
    const current = ref(0);
    const next = () => {
      current.value++;
    };
    const prev = () => {
      current.value--;
    };
    const steps = [
        { content: 'https://lh3.googleusercontent.com/k1fCEacdYPTSjXqcDsBfMcJhtNzQ0AanVWqVzn3nG-l31mmkeaL1P4OiuocPiBsPA-tctPj2vmTq95NCQpZ20fgFCN9kcjNJs56fF_n-plryU2GifbjFZfrfSIj-SpR79TllMg-2D3csyX4fwg9oPviEFUq1yareEkYVDRDdzOOoLcZHBURx14XHSv7eulHDZ9EUdZO-Pttl-kYaDipfv33rFLsJRS0WhjkcFZ_Pur0QsPAjtoyxI5aIZYk2WsCAnEY3rLteaijKQvZckqX8-UGZfbRRO5gjZIbSu0u9XVMSpB8ObhdEls4hodbBQwe1LRrp0bJMzZ0Iilu6XJLOL8KF5ouE1Sm9pnw0kWUWq2Y8vr0pju5O03J4a2jprqkoSQ5ZpxunaZi4VAWm5Xf0J3anNHKqTNjZPP-SJWPYp5zw4T7AquQGHDiWaB7q2zinbviF8-xugm_H8ZAUsZhGajVzcs2db3sQWseXamr5bKQRDQFv5Nig91lbjUFtakphCIC699cgj485BdJtnBvj9MdALvLOqtmU2eQ-mb4Jx2SqPpS04U_9ryRWrQuTJRD_vr8dVqTvNmNbaBgfSgCYgjdXa9KGmUqT56jHufS7yFnZoxbyeAe51bGV7ntyd46L5rexV6PBbGURP-MKUpnDTNHvuLwo1hAkr8vBYS5bi19WsF2aBcbhafRejaFkca1G5FuK7JbJMvlV8j2finD6lvduMt6_uiPCZg5qwYE8d0MiOyk8ojvvJpIjTnHIcRMCnVi0kZLlwQYKHtL5diE2aMIz8oDw-bKuhPBZawaVytdt-ajBXkXj0Vm16yf83bQ5Q4TnMTVRPqQGfoRq--ElavRZSXQ97DQnxA9IK7WX223OOw_fOEk1sISJsZr3NVL8lBbS-GKS_kiIdXL9wih3t7Y33lMwzPDd2IRKn2XmntTmleBhGqTJy80V4jnn7ieA2Z3SfdtRT79xQSwpzYi4aiNi6tae5lzkJEddfLt-uvXxcBwp9mkt8g=w1134-h637-no?authuser=0', img:1},
        { content: 'https://lh3.googleusercontent.com/-SvrYImsI6v1jKvP2PFe4uYQkXFeZr_FVxtHnQO1s2pGYGk5jjU6BNCJteCq-HxewX5AKeMu9gDhDtTUnEyBLUYg9QsS1635J5uTsyt-hl9n6rffkr0J0cepPjE_Yi1vpt9y5IgG1ryYUr4_na3SiqSpA82YNNJQrCuW6_FvRgighZA--AlCMHvkqPE9PDw4idcSJ9CCRFCygKPzM0-PsB6vZ0s335C6IUIMljL-e-sAQF2spdCkJOouWPUCD02S3z2aLkRlxI-4V1SyXjtZZzv6xJvQJDvkcrFBsXxYqTuqmoM3ToLVY-RDxSPya86EYbc-fGGsZ7p5SiNc4dALNqkca6HGDviJHCE1n76lT58X3CrafioD4VdPS5Rdp2eAwujf5PgHox-qkrzwbYs3EwKxzb7xOmm9mcWed8bghSM4-kfEZu6DwmjgdEJ0WU-OBnvYWp1vvbhaoL_Ybj2gb5mJd0khMqR2K8eyKV-kv0RggEMfF92Lkec3opUkR9adEwSilEmw67ZRolp1wq3sUiSqAS_dAgdQOsBArexanFg3i5z8bYY7Cr_0Rrke8MZk178yS-JhrowwaXgRQiKd3J4nrSvBZluHc0XcKZx7keDlWoJB0BW8hAP65RK36e1anTfewoDkDyuUiz2oHF3b-Yj6XF-D4VFv-dCF-73xHDrhdmLV3UjH9CUTj_NchQYJ2W2Who3SJUZUGNJxLVtKBTje7LHIy3DZ-tRT2pmIvD8R_2gla7-qJgcARObibc_eyLLfv-1uRabCT2aPkoYA_RfQlrj7XyWvP-HHDA6dgJbwUKiOmkUzQd12qe9p1h-LYlB51l8wEYj55UxHEBTU_Cy2fzsdzsoNUwokKyejs03VmgyTIdYtCplTBHsoYsI_N3e9fMGn9d3qvgz7kopKGGiABJPkVh6qLG_cDZU349MJh7AT23MrDkAlfHJDPK6t7gZWMJbpGnaK4jGjuOKV98B7NFLRJBOUGCsxz74twg1PMusZQ6mDQQ=w1134-h637-no?authuser=0', img:2},
        { content: 'https://lh3.googleusercontent.com/JO4OPlVGd1DhpSOg3XNpAwzmXAQdPweZy_ogSPAQ_oNpK5GsafXmvesy3bIUi-AG-U6ksDe8-tefqJhjvar5Y2ahOYn4GRm0Z-VR5zrY2e6Ax3cxDa2EC2tRN5CInhjcgEZWDp26uL406eCWBPP-vv7Sa1BHVyyNhb2cRigO97h5qG8pDum4rmsPzoPgKVdN7l2J1RtSUEDE0yy42JGFIDGau-QDZcG0gMlwc1iGzP7O4O3_aawMxR0-NDlSgdbAZ_25MrPOySsEt-WQ62S5xhhZAekW1BueioPr2sD-wqrkq0dPoPIrIsIUq6xz-V8NE3gCjz_I9IE4T5x4juvV1zjdEVp_jK9yvHvq8f9zXP8ciNdY_zUXTh8eSAOKuh9uDrgCh1utr-WhXEcuiNIg2xyprMuHliFO14IWiU6vlOhSKou82PnvQbnmcvjwnnHqZhjJxwNuoC3JBc9dQgwqnV_NyJbybVUv7K5x1UAXydCiDkqoF6Wrp6sQ3KjID32DsApXAVFL36mp7r1HP87k-SzSQ6sSRkDFrpxLbui8TQcUz7LY8emVEzg0ylCS_HFtD81Sv5vj46YA0ZGhWWBjZ2IDMQN2zraknzUch-Ru5vyGuVx2bu9E_fDiVFvdFkcQlVrjSse-D9qn_q7O5nbNWWlmbowgq8f1piVRrr2kg4kV38S67cgXzqbBAY9ft3uwZQ3CT4tlvSHPpOkCZadEk_3QymLdrmK9mKCQPGunvdVybGhBMJKfmKXBfAtNfpBeK035iI3QP2M-2u3tBJaNBACEsQoy1a7odGMKaBS2SIkTe_JEFKY8TSy-DkFAkBI823YUPLwM2tVKaYYoDHCxIcB1xmj7OjcYpmWGwg7E1deiw8GP5_jFduCYYXi6tp6hY0Xm3NcwhbBc_WNq9HpNhXFSeSy0vpbnnbAg6t8FboSaxZNCd1DCvKXU-uJyVY9ysKF705GW8iiMzrY_Md6tA1NMV8JVFoPPsk9rZ5uq1NU5iQcxxhiIhw=w1134-h637-no?authuser=0',img:3},
        { content: 'https://lh3.googleusercontent.com/hUMc_RIMX7rNKfZeyFTYOnM98DgOY2X6ZrjbQ999wz_d6sK0myBwCp4GmIp5dKAgZBO9lxHQtiXUsDupxMzTS0H1Nv7wDCQ55ZIDNPKguQD9zUdZdkhNPFaXLoVycGMO5kygi2QUA19v4JpfzXwfHiOniw82Mls9NxGo1nZazPeuA35PMptatfCfMwBPvrMyE9Lx0ow0Pl2lLa4MlDJU0Uc2fAnvqJljTrW1alroQe4g2qWpqaVRMkq0VoI6nk-7VdPExfje2p57t3Jd4Ch5q_h3NhE_UXVMq2zm4k3xOgLCkv4I60rFJ29OUv9AGunnwTU9PyVy-Y26WqyurGqDbunWXanMx_RIeMttTk9jtDPkwQIb8QvvOK-6i4pBYxMMRJYCp5r36241BbVPL78UVS9MvcbxfOR6e7O7QDEVF8-0mBNfrDk75KqdodCbRcEeT7mBZiAptOKPWG_15vWR6UjsJXKVEEUJP3zLPgGg50yy6C8A-yg1koJPLmbcsg7sPmSNMkQk5PYfHmaHeS7gGzztPQu93thhjOpvsOrs14AGJECIX7wJPxDFQhgtTrLvZ5gOuObLES-uVKNzMZV8hF0bj-GzVfjrF5yTjFedg7-iiVlOVJ-w7Ly07zt_uQ-XmYnF62i-zD6a55HdHiFB8eGHlvVOkR-uFC53jdr0Y5rJEhtCqTn4k-hDLU_tqERjsrwKHCUnk9LRrgjURVy3oF6JlNQUpXJFuUeNrXk1K7rKCTLttiTJSnJbIOtCf4-vPIy9Vzm0emmgk2aY5Q79HW2BQt1dm7sn9Rw6x4yHTzTHcQpXVRumZMUgUVNhWyORwW-UZ85FrpsTP_7HYb9WziUjY-CmnNZURjkXLCKGsPHtlvd0X6Hc5kGIYk24VNu6WOt2m1PGymz496UIwJpyYHESHWXurV2ThtALdVpK73tJufPfPeg70kH--3U0yli9uK-67FQJM6zgN5p0Uj14de0_1vZnCLFqx08nrNJJpnhsBeVXGr8URA=w1134-h637-no?authuser=0',img:4},
        { content: 'https://lh3.googleusercontent.com/SkhbcUqYwP7yJ08iBrZgAKBHL2tEPJKGAfIhMDDdHe-LdpQABuFanJplTB1Y-eQVGnjPbj1qJMKof0vkeY75qrfOTmRikv0gaoTsGzEkCuV_MUz9pfqIDI-W97z6voN-HDvO_q4J4Yx6T-B_mt7mXcc8MCjgxhUOMIaHYRy8K8z6Jjas5SbxG4GbK3jLdyeWTgt_yCUvsF2i8kgEaGrp0NRsVCqtUwZ33oaWKtGP6im5dCWApKQzePwA8ZXdU7dbV0oWX9VhHjnN70lUlfmt_zOgsHloRx5nT7VWIAxHQj4Z5qpouQv6EHxwEyrwf2KQ9G2HL0D8Nq6jJBU2d5MyKi9wUabAcasLtC8L1JGP0uIgmMB1IWVgMpI7EvpqMpdHf4mUbLtRbYGMyjRIp5f5awaE3dPwU9m-kyOZU-WhUyx7sKhjAH7qrvsm0BdBDq45Zt8fRpXNZeb2xQ_Bll8IMIZn8gHSRS32IGjKsQhVmgryzJgSq8KQQhSNvIT0XJnPnIcEIj--oQYSkYXkpN9fbES1MwEri-rt5wu_oPia1XvkMH9diQWRyuSymG4i0Cpjom06UUtMZIdHaC4hbdc7a9nGsKUVSCBrqMouxY0NOGjvbrtZczQ8yF4Zntt_uj32TPE8eNERAGREbzHf1XpvYxEFp1lMmfxmZno8FWxihYHkwQ63nHiki-HiasGsEBni2ygwjCLlN7wNuBQ678_JISLtAxrLifYKFLcRDkC0f2Ngv2wfNCqRTXa4pOEgKp_qCPvJfS6lYuQhyUBIUp240Q_QVRTUSyCnKHCBpeQFaQqkU3Nh3xF_pJf74xCGiZ5wW-x89me8-gC5cWYDtjSZY3djEtkvr0_Onxn3yQ5noQ0Fg46kEtHzy0sVlHn6T7TLoWL4avF3kaCQysSNx6FEbe5frMP5r4hLX7v8F1Bonn72w6CTiZ-7UtgnuQfCM_ypfFFKIN7PmWeKPD9RCMRoN5LI3OyxwlSFoNbKzaPsNWfc8gc1UGUHFA=w1284-h637-no?authuser=0',img:5},
        { content: 'https://lh3.googleusercontent.com/fXTwMIVPiAxO3_-TFOlB7g5HBLY8DK3jcANMuRNDsJ9dgh3veeWnPefu7sPPrWpvtAj1xa0cswCnxhtdnVyYM9qJK5TG-k9Wz68WfYbQPg0984jeHoWpPUsYrHa76pZ4w1eI9RErnEphxxHRIe0O-RXxV9dck0CJzlJekDinfc8dqVKYFPGS67-DPRArlnAOwGPQVhkFJna_CN_hAQNCOf4ic3bMXjBBv0jV21rsZFeJmCXMtAyKkQqCpznFTVqgkG_Cl2lDRhX3CohThrrsiqbneh7bMI-4QYJBbzSxFHiRJc5k87R9x4YinC79qxjRBsX2r_u0bhXENlMGp8lncRQRDjydzAL4EaetrUNkA4e6Nz4LUUMBE0YFy5zXusRKw78FqzgLTYtQu3JYE3-7hSVyEjBaJ5G9py8JIqVvH4ZO1sYG5mE9O9tZJSJF3FbKqvoO8fJB6Hzwe348iDFG7ZJxOzetAm2bcjntL5egxEkDizt0-TGW3SR4o3dCzuKdcypMW_SEF8k3ZdoFbfHRA_EBHckHmzQBRHEo7qQcDyrDfDY6wshPmzfIEGhmgQmkArB_saTilC0yin2E2TsIUytssBHdYadB7FkdnnlNxkYpQL2BL0DDdEqj94V2_o3SfE-MHA3qObAGz4cUcr4KTY4sp-qskgMX44LpAsqnM5zgrrhgb10gECCuYkP2wTPR8434wPTP7GGxHVxz6jlfNqzSnVqRlk58PM_H8YyA_GXncEbLDlq__bhZ8xFqDE2wEJi7vcq8KvtFGVS7ecCN5PeIVr1JNGKScLREQRDN35m2CL-2CwCXFAcwWZH-RLzIv1BiJz-2TyDe9Ulvy44VTEZySqkD0edruJ3fj1w6Szyyw1xM_VDRytT3MohML1AbuI761Oi5a1THonkVhPn10lfJIac-rvwquGarAa0-HACEKQ_wj45PWbs77Hrhz0RwaEvs6GxqJddkoWkivHdzKnpeUJqT5ivRxlX7xkWZow5flq158agQ1w=w1291-h637-no?authuser=0',img:6},
        { content: 'https://lh3.googleusercontent.com/MX4HrjPTFZ1rPe5hWTlx6nUOXYDATIt_sd6ZAec2wVcztV1ZWyNfIWIFovVVCzMXX2y520LXuh9jbGTl9SYdAnYadgtti-U4NaUftEdLXFh94Sfe8cbaDV6rEBGNlxDENs2KdXv2AjipcCFZx5OF263zQeqRidA1y_btDwrVoBx2p9Kv7IhnW77NyBGr3GU9tcbZyXDL72D1WyPEj5YlDik2PUeQS4l9z3xH_HDSVSJ8SU1qzWw8GJHXvuKY3VvOZIw1bhEAmljY4woSB16w66QLoGp09Q76sTg5LESk0QUDLxYbqEenEDO5H6f5VHUKpPnnI5UdNlrJRYiBa49j19lkL1rjAyXN9cOhAxKj1sFXd23CG9chFH46NxqfUwJ78_zhLdQo_QixXem1qtLlYR6Dk5nSpPnIapnIi_Gb3Y4RmFy-LxfxcJ8Yo9Bz3iI3mun7BmBoPH5p2w9xzW3qRdlCKc900bMLwzeHPyHvo4D7LleV7wQ_kqBXHUDLTKe3Y19yLkzWWPnK0wG8wyiML5uuL_7vTF4GPcxK8ZKHGWBJwxH4XgA_llNiQCpGUGDeCIf8EZ161lCBm3B3Sjf6om6JlQNHhn5eEKsr_L7-CIe3LcdlKat-Yc7ruPtuMMMh4qV6fQc_gmu3s7EPIxKgy6Z5wP3Hwq331cUSF5JIiSj3s4VZSi2MOu1r2JDlAuHPs58oO_EyIYw8jmWizthPUCcODksKEDSdoAbfiqaJN_r4iIVnVKCXMEa6l-6CnOL5hjmU6j8O84qBdFe3FxJ14VgRc8-ww8I0ZwjdSi4gO32pbeeuC2Rp0aVqXCoumQzH8A3vdjj_RlsnjvOYGWCeiG00twPhFhHFSyV8o2k5nDoJOtURnNSn4c8akRCjB5kP9IMIQnau7gaoJT7A46GhCEjaG41QpGMBV_T1rRP5CoAZTpDfSMK5d3_YcVflR9GNl3yVZKosJa_iNuSdzMWLp9GCOMcLDl7JBJWTMNdTRPC6m4KB_0bk4A=w1283-h637-no?authuser=0',img:7},
        { content: 'https://lh3.googleusercontent.com/bbA1WLVVokEf0ZXNEcNpedohTcdW8syo-NIseI-r0jYHJnnqTUbx7rKzYtg8GQuATYjA3c20SoTMV1RRI8cj_l3LNkwve3TJ6kBKUvIoX-DkCgu1rrX2cQyosxh4DX_2VY7QNTVleEWa3wIS_d--orC8pCU2DMlY_7iPJuVpql5jfqW8L4tkx-L_HBiMfKMtcJeGcmw4LlJYTLuhyE8UBz5G8DsUp_1jQhJSw7in-mQq9drQJ3rsdXO0_7L-z_9zV5wtKg4rGp_5UYUZPaheUyXyNmNnfgV1T1Z_NjL6p8RkhhfF0-Ken_K_7x5lwQHgCWCPdPuhn0mIqXbqCQ_Fh8bCPA0QJ9db1p2UnV0gIX3_0Owq2bktP-EhSYgF_2NJ2fh_Wt23OtpJu1mouI8qn5F1L1e-Wwr1rykyQVWNRyliQGkWRm3dN9vY6Gv7pbw7QSMrS7GkbrYmLrmZblFdVJqhiQ-KntJ4N_DQJyNH7hD321E0CkMXM0s3R3zGMYuyQwae1dCoPH6y9hD61Y8DW8mwoRRja7o3CwJq6VnT0-lvsIMF2xYB0q3M6jM9Xj97EjFGnpP4gevQ6nCg43nJrbyndxTZOpvvOEK1YqyoG2W9s-Ra1hofFPodUKA47TeayRMZy6HFMehyzQkzcHaQWkslXXUg36u07TKHl8Uw12IjLrXLYHC8oi0DnwF5KZXcpq-8asw0NV5zTqk8zigYWXyJJFSt5Ov7cT9PC-eLjm9l40PV2uDfJ3LYuw3qMZfertlPz-ffgHJB0HfFS8uGPwYdz93I9yGQEdrHU5uC8_WSBn9R4KxpmQHTifRlVAn6eZSEX9HD32dEqXCd1XyVq40mHEvHmSPHJ86C4KGCHEaAQo57GTpOtbhFyzEreFYYki6xWt2Ab1XmoSUa-cp58DRtOVJxTZGFgts0x5i7SO-M5r8oNPRrQLHaRLZ8l_X18pUANfJzezY42RAInFmZ7IEW0vRRayvnKF7z-rn-S0vLhsTTVl1s0A=w1273-h637-no?authuser=0',img:8},
        { content: 'https://lh3.googleusercontent.com/UbWbrnguVvd74_B3eAkg3nZc4l9dYRjToKrhNdVO04iukEujtwoNjmeGrGg4xHQPLdWhx7tvoazO9nLdrf2T36IwjiEQIhqZaBGnVWFuCENHJYREBdriW1y2ndv_oI8-Y_fBVEpJ3s_Sn9m9aK3ToHRS4OD-dNYrm8ja7seZUyn5gLGN7FijXl6VSEHFvSRrnN8Qqyy4dFxUi_liA4I0-eXjZd5K3Ok1FGuWxZskY4Xt2YjFIZEzBPD7Dy5LlG2-Y4rn4CdT7n48MY_JgKhIly0nEaSV9qkmDlRJ4Phe_hJZ5mpPfgds786md9laYrCZhh9pn0q-pJWR9pTh9ZOO-EJ9ax3KTp1m0S44oRtne-F__ksZUvfiODwBw3UkL7p1DetSN0VfIr6JiGp-DH3uMqfEEODm1RkygV0suM9vlwoOtp85J5_z6RpFEqUp-cLZ_R9CUC_lc43M2bBHf04zWFbqqNiKd1qWvtaYPMypUNq8e-SJoYcoD8wOHZJJovtlyDzAqtMFpZXNjq67Er0DNRlhhpvsD0ZueMPnLt8ansuziApQeByfqPHr_4sw8uO_v6cNj0_W0sLWoLAddsM2URnsNoEud0POa2UnLHq-ACX_YpeAYWCdFI5jnLljOjr6DnMKe6zLYM1gb5toDsDC-LMTyI9jKQkmlxOFd0u0HLnaRicp93EX9xoyMJgr_2ThSfP4kmxupkw3tlS9nVKqbYggK4LpRRiDzdJsoHUVDm6i4TcpNa7PsU1EB9aR37aocjMqCKnPJpNFQpS2JzvRsiMGcERziSBmrTaT4ZTALig1rlyozhxYbrv94oERKieJSgp5a9kGTh3R49YHM3CyvIcIKSH6koIw7mQ7R6Dyah351sd7nbNXpA1j62QT-bPCaTLnPKgh3K_dImJLwlcE1ppXZCu2jwIAjhHGKSp5Y1T4ZEJq8M9Qyl5qwjdwa615ZvSronYQaxqPtjmb6SvNvo7EXxYeJgKEMC507PTS47GqRQKfstestw=w1284-h637-no?authuser=0',img:9},
        { content: 'https://lh3.googleusercontent.com/v3pvuC2J4p9PsPyaZfyqnYcSsy_xAmDSWyPa7AeJ8Vd7kML6rovl1EMWHDsK7ZqjeKuHo418bUoknx2nJPFuHKw2krINwBJen5vIz99Yvc57kGAaBtBt8VtipGlfiSjWjakL2hP21b2YeYptgKnvLIDq8JT9F9kt8TgMdfTtkFQrYvLLPXkXqyRiAq9buIcNksD2aITqf5J7c6FiCHDfRMLO8BKFqg6kpVi5CHTDmh9RyDuAyDrGrvk3LZu2S13FtCSJGJMHhuIX_BFQwp0m_pRq1Tp1KbljeUrH5Sm3rUhsYGaMqaYdU_UUm2gunkZJUIQuj8Ms6gli_NPE00hjS4GFN5HlT5_wKV1N6ce4VhiwchYvfbnVRy4EY4YiwnVv_VBnO6quASfVMc6p6O1eyfnUpj8cd1pvW-9YwL6dsaUFvA5UVrVN-LB5xB-wY9VEazlIHTg5LqUDNbob9Z4xCFHPwzjaZZXW3_vkzk42fme5Vlc2gAXUjtqaJNENwsM3B1nuaAUjhSSqbnY0KT1EKKakUvh8YVpSuVDkauHeeDCU17kE0QiFBjOjR1YIP3kCn97fmrnHuujvGJ-lq15agIBzFD7y8kJRwD1W0xhmGAd02-C6gUVQ4w2I-uB4r3Edc2uORrrpQ9MA97v3SMBpqiEDoWjMM23l2zK9MI4I_15iQKLtXtGjK0kV-l0DpEpu6W57IuvCvdzQlorShVmCyeY24B90c8fGfhhwKIYanjg1W5gJYx_1ftTSTbi5lFOxrbyZi3bNxdyMebDvgRdVjh7ednSSXf62-mBaQ41Ccc46jNcJ1UMGEa6nK0_4H8SR0DCfdWtgcZblurJfPQA3yvpAH9HvDXfY45rrHOeH7JZ8k7Wpe8suS1dxQa2OFuJcoi1ud73OmNS5Bg84RhgxjZ1Xg2NJFSsxdMZo1GOTrhYodRn7bpqUJ_PtlIYxYCi2ah74XhGNAVq2cGBuefA4ZKQtIeOEdog7s32DhXo384D3bJnrUKRvHw=w1285-h637-no?authuser=0',img:10},
        { content: 'https://lh3.googleusercontent.com/PluVv_IcwovT3iBnbBBs02JgNHVladOaBziB9eq-mzUDHJlGwifOHpEXFA3vXiYCWQf-neZvMFbGoz_YrMOJaq2rANKuBxLWn9m2s6X_tFv_Ywh2kSNfm3kDFs9dc_kyoMNcfEYAlOqC3m5FZUFqDn-fvHmk2Ad3v1Gjm5Hp_kQIQXBnQdX5I_n-TwNOYM5KbC6Cb74nRb9Sl0NDX61aaFgdI4j7nq_8HhzF_nYMdzeEGg5Ut5ih3WFm3CqA6G-fKUwudHIbG9vmdcrw5NSgOqGW1NkORgr9HeCQ-gCM-j2XJ6zGYx2bdb_L42oQ22Ve23xcrR-WQrMllFSW8oCvBh039vp9hdrsQBG1AmybOHxJJV8KdiffMM9gq0KzsJSIDMCV4U2fKHpNLd2gRIldY09jMOKbiTRx41UVz3Z68Mx3cT87hXCjDGgjJfntfZb9fcXc7FR1qmg2VpLS1HygvtLWJzih2A3ELf4yj27hWGTlRnV_IyoAiHF12i4j6-4Yvx50sqGSaZpJs2vMbkBiFubpYW1BiqWB4S8uvS_hPutB7gH1DLBnAVg1Xx9zcxNNJJf124tlzvMDYBp4HlNWFc16ZbNEVkh2iKAZzDy8ZwNX1aIffhs6RlxcelH2wRGdJf2Jijf6JmBtZ0YtkvnGrYvJF3biSkbjMBJJjEroEx1MmaOJiIhb6SFV8SwEWM8Q3ZO9oAiEcF6Qg8uSBMAmmppZCv6VKN3hMm5ZseYsx_pZ2rIEhXFh4b0tn7stiJmfPPRi-X8qw6qAPgNEhLo1mYqoj9v369hOlloQMDWH0-zHlclUZO_lKK1Rdu6PNBXroSt6B7taU5IkG4csmeUb9KiCnpebRYZn0Sk0ipD3CRu4PYKZGyRl1RNojuRfN3BT2OReSBPnbQJuEBGN4lGRCb3YYGGGeAhQdnd9lQ_0BTL6ZQjNfTDd0sZuPAWXtKTEAIjW6QMxlJTRD8WQ2jq3wlbhP3D_e25jj0zjWqqYGtoj7giecO6X-Q=w1280-h637-no?authuser=0',img:11},
        { content: 'https://lh3.googleusercontent.com/SH0ZC0b9DEz_sg8ySqlPPZz3rqrcdhDSA_mv6vRoGNcpft9MDjxA6BzN-2fbmhXtzvwSAv3d3Zn47uzxGGG435zepqps7goP_Gq5hn9uNR_lRUGOmLc8I2zORj-E49HXRCdXqIXDJ8j0U-t1o37tQ8eWf5dboLXh6aQ_v8nt4XoMFJicHe6MLYYqjqFu4vmJl-rB2oCGqq6u7AQkw8MskLCwfqLf5H4qc0BNL12OsD4pzHEm8vPSRD9xV68si0ls3owYCswz8taFVdsi9-gVbdQGQOLtWwfmdeGXIHxyjls8chCH4fUPNPkWNoplZ-9NX40q3ksidUpu842S2hvMhE3U9m4vbD1Ay_YAHon_2hKKxpMu-K3DsWt6SMvnJx3WbAmOFCSRqP-mrp8Fu4U5PRp1F8WzuoIw1ROJuLJbbdzF_TFcoeMkeG6D1r_mjD6U9oGdp8RgUXWpfjGxGufvcFAlZLlN9lwdHQR7Nox8OO1CrM8BMJRSAbRpXTlMgv5IphpbRKcbWq-6KA2b5xcDCYdE0dc8FC7ksxE83Qb2t4qfXBh1hy9MpAB9hwpGrPHy1_2k07XMvYccW9SDLQv_dE8deqTD6Y7DqyY_BOQxXx4SLvALKgvlcVSJz3shPY1uN9yPC_CpiNXj2DpCBFpkdiHuRTcbX67NTYOy_hmAz_jR9MfD_asq_8yXEOPD0etAXsZ9suyJO0OVL2FmqrZEfORNM4955gMLHaWyUZ7Dkxxj1qwMZpGj4RpmV8a5hhHdJvJpwwmrVBEYEAiOTrh1eGG56r4vD9QMmPTF_DWg6jplfl-jAVDg8JUhwIBITAk3bGHi1toKYawYXls-v_YNf8vqLMa_XZwI0Rgoq_rRtslzzNYeNbBwnpVkGBXwA97HL3_xMmRaUoVjFCV3x62HB6CaxMeHh_wsWtiEDcbmuCFOLsjAkF05rgRyZdILy7rwcuzYrr-rfyoR5arAPS6xSqeD5WbrpKeKyzrcu01ZERJL5ou0PwfKGQ=w1271-h630-no?authuser=0',img:12},
        { content: 'https://lh3.googleusercontent.com/PHy0olSZ7nCXLVuyxSWXlPZvaAQI40k01XwIdQLb3maXcBJWotEaOjJnq8Cjg4X3CjI6z95evWYC7KudsbWoHwow4pYDYEIdxGv157l5FRw2sM-zY7jw6O-oQTEY4O0X9wAnxYXaAxAeiasOIpa9ljBey0n3-4MBa-vB6Pei4bZn92kIoNFnWlXcoTvjMbO5D_iI3LCc1iXLSGECftUEqY6c-I5ToRB8UkqaPxmwm0sBTh-P03A-exVIbsaZv9ESfiZst-HyPRW7qDrvyz787vNERZXw57A7mkwUdiwJwJnxIduLjCmnpzN9F7LSNaVKdLdvTURoocNN-MIHXcxeLo-vErm75K7LsuOXCI6UUj3GyjIXwc3jvZF5hm1lhOAtPVc-AA-IKmyTLa11Pk92WxgvNC7g05Hh5XhpIfbTaQsLANvov7jTajddU6EfL1qhNsDuYI3GFjlxOn6epA6IOhxSlMv6TFnXsGckJheWX7htV-lUWa5pxgTZhDX7L2HPKqEodoYWzEGtgVxv2oqoYI5JbQ5k85CjmYR3XE8bbcXHHhBvmscI9auOGL9xrBG3hbS3932e3855hNaHjiPzvZj4Di_fXhEXd_ZdUSNEEsbR-BJ0gydAQYphkQaASjck1_YW_ra59gmxQ2nBVlWW9oMTvr1Wn3VSzGV1Vqi3xJICSWBHWKDbvorsa9MPmvKEClmiH-8aKlxLJyCUguudesRhA_dZlAkOujNVBgX0FqZJjNbExO9zJwLLenUHmEocCKLcDfa_itHikDo07BowwCVcebj_vlHdG1IDnet1jqrsINswRF2XtbtnJ5l0scGB-wMdsM9VfxmWPxOElPqjeIBJTml_nmyNpAsqlmQNiVaP3CXRASgisdN_crt8GhSMSTGrfu7zoJcy-lrrkT87vnFHiHnBcCRVu7eTQHL4k7lN2H5kBON4zRoEMcNwNk-XO9J5CJgg4N0SDwM3jj77gJVwAy0hcOHK972tDB1Mq9YZIBEtbmvlxQ=w1282-h637-no?authuser=0',img:13},


    ]
    next()
    prev()

</script>

<style>
#components-popover-demo-triggerType .ant-btn {
  margin-right: 8px;
}

</style>


