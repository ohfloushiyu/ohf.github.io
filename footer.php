<?php echo 'www.wzmiao.com, 供学习,请支持正版';exit;?>
	</div>
<!--{if empty($topic) || ($topic[usefooter])}-->
	<!--{eval $focusid = getfocus_rand($_G[basescript]);}-->
	<!--{if $focusid !== null}-->
		<!--{eval $focus = $_G['cache']['focus']['data'][$focusid];}-->
		<!--{eval $focusnum = count($_G['setting']['focus'][$_G[basescript]]);}-->
		<div class="focus" id="sitefocus">
			<div class="bm">
				<div class="bm_h cl">
					<a href="javascript:;" onclick="setcookie('nofocus_$_G[basescript]', 1, $_G['cache']['focus']['cookie']*3600);$('sitefocus').style.display='none'" class="y" title="{lang close}">{lang close}</a>
					<h2>
						<!--{if $_G['cache']['focus']['title']}-->{$_G['cache']['focus']['title']}<!--{else}-->{lang focus_hottopics}<!--{/if}-->
						<span id="focus_ctrl" class="fctrl"><img src="{IMGDIR}/pic_nv_prev.gif" alt="{lang footer_previous}" title="{lang footer_previous}" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/$focusnum</em> <img src="{IMGDIR}/pic_nv_next.gif" alt="{lang footer_next}" title="{lang footer_next}" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
					</h2>
				</div>
				<div class="bm_c" id="focus_con">
				</div>
			</div>
		</div>
		<!--{eval $focusi = 0;}-->
		<!--{loop $_G['setting']['focus'][$_G[basescript]] $id}-->
				<div class="bm_c" style="display: none" id="focus_$focusi">
					<dl class="xld cl bbda">
						<dt><a href="{$_G['cache']['focus']['data'][$id]['url']}" class="xi2" target="_blank">$_G['cache']['focus']['data'][$id]['subject']</a></dt>
						<!--{if $_G['cache']['focus']['data'][$id][image]}-->
						<dd class="m"><a href="{$_G['cache']['focus']['data'][$id]['url']}" target="_blank"><img src="{$_G['cache']['focus']['data'][$id]['image']}" alt="$_G['cache']['focus']['data'][$id]['subject']" /></a></dd>
						<!--{/if}-->
						<dd>$_G['cache']['focus']['data'][$id]['summary']</dd>
					</dl>
					<p class="ptn cl"><a href="{$_G['cache']['focus']['data'][$id]['url']}" class="xi2 y" target="_blank">{lang focus_show} &raquo;</a></p>
				</div>
		<!--{eval $focusi ++;}-->
		<!--{/loop}-->
		<script type="text/javascript">
			var focusnum = $focusnum;
			if(focusnum < 2) {
				$('focus_ctrl').style.display = 'none';
			}
			if(!$('focuscur').innerHTML) {
				var randomnum = parseInt(Math.round(Math.random() * focusnum));
				$('focuscur').innerHTML = Math.max(1, randomnum);
			}
			showfocus();
			var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
		</script>
	<!--{/if}-->
	<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1}-->
		<div class="focus patch" id="patch_notice"></div>
	<!--{/if}-->

	<!--{ad/footerbanner/wp a_f/1}--><!--{ad/footerbanner/wp a_f/2}--><!--{ad/footerbanner/wp a_f/3}-->
	<!--{ad/float/a_fl/1}--><!--{ad/float/a_fr/2}-->
	<!--{ad/couplebanner/a_fl a_cb/1}--><!--{ad/couplebanner/a_fr a_cb/2}-->
	<!--{ad/cornerbanner/a_cn}-->

	<!--{hook/global_footer}-->
    
    <div class="deanfooter">
    	<div class="deanfttop">
        	<div class="w1180">
                <div class="deanfttopl">
                	<div class="deanftlogo"><img src="$_G['style'][styleimgdir]/logoft.png" /></div>
                    <div class="deanftltxt">
                    	Powered by <a href="http://www.52jsw.com" target="_blank">dean!</a> <em>$_G['setting']['version']</em><!--{if !empty($_G['setting']['boardlicensed'])}--> <!--{/if}-->
                    </div>
                    <div class="deanftltxt">
                    	&copy; 2016-2017 <a href="http://www.52jsw.com" target="_blank">Comsenz Inc.</a>
                    </div>
                    <!--<div class="deanguanzhu">
                    	<ul>
                        	<li>
                            	<a href="#" target="_blank">
                                	<img src="$_G['style'][styleimgdir]/weixin.png" />
                                    <p>微信</p>
                                </a>
                            </li>
                            <li>
                            	<a href="#" target="_blank">
                                	<img src="$_G['style'][styleimgdir]/weibo.png" />
                                    <p>微博</p>
                                </a>
                            </li>
                            <li>
                            	<a href="#" target="_blank">
                                	<img src="$_G['style'][styleimgdir]/app.png" />
                                    <p>APP</p>
                                </a>
                            </li>
                            <div class="clear"></div>
                        </ul>
                    </div>-->
                </div>
                <div class="deanfttopm">
                	<ul>
                    	<li>
                        	<h5>官方</h5>
                            <div class="deanitemsft">
                            	<a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">新浪微博</a>
                                <a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">腾讯微博</a><br>
                                <a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">百度贴吧</a>
                                <a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">人人小站</a><br>
                                <a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">人人主页</a>
                            </div>
                        </li>
                        <li>
                        	<h5>企业</h5>
                            <div class="deanitemsft">
                            	<a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">关于我们</a>
                                <a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">加入我们</a><br>
                                <a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">媒体合作</a>
                                <a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">联系我们</a><br>
                                <a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">QQ群</a>
                                <a href="#" target="_blank">友情链接</a>
                            </div>
                        </li>
                        <li>
                        	<h5>下载</h5>
                            <div class="deanitemsft" style="border-right:0;">
                            	<a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">移动客户端</a>
                                <a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">次元社APP</a><br>
                                <a href="https://jq.qq.com/?_wv=1027&k=5QKrK57" target="_blank">次元娘表情包</a>
                            </div>
                        </li>
                        <div class="clear"></div>
                    </ul>
                </div>
                <div class="deanfttopr">
                	<div class="deanftgirls"><img src="$_G['style'][styleimgdir]/scan-girl.png" /></div>
                    <div class="deamftewmm"><img src="$_G['style'][styleimgdir]/qcode.jpg" /></div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="deanftbottom">
        	<div class="w1180">
                <p class="deanpp">
                    <!--{hook/global_footerlink}-->
                    <!--{if $_G['setting']['statcode']}-->$_G['setting']['statcode']<!--{/if}-->
                    本站不提供任何视听上传服务，所有内容均来自视频分享站点所提供的公开引用资源。&nbsp;模板制作：迪恩网络&nbsp;<br><a href="#" target="_blank">中国互联网举报中心</a>&nbsp;<a href="#" target="_blank">北京12318文化市场举报热线</a>&nbsp;<a href="#" target="_blank">网络110报警服务</a>&nbsp;<!--{if $_G['setting']['icp']}--><a href="http://www.miitbeian.gov.cn/" target="_blank">$_G['setting']['icp']</a><!--{/if}--> 业务许可证：B1.B2-20140071
                </p>
        </div>
    </div>
    
    
	<div id="ft" style=" display:none;">
		
		
		<!--{eval updatesession();}-->
		<!--{if $_G['uid'] && $_G['group']['allowinvisible']}-->
			<script type="text/javascript">
			var invisiblestatus = '<!--{if $_G['session']['invisible']}-->{lang login_invisible_mode}<!--{else}-->{lang login_normal_mode}<!--{/if}-->';
			var loginstatusobj = $('loginstatusid');
			if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
			</script>
		<!--{/if}-->
	</div>
<!--{/if}-->

<!--{if !$_G['setting']['bbclosed']}-->
	<!--{if $_G[uid] && !isset($_G['cookie']['checkpm'])}-->
	<script type="text/javascript" src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=$_G[timestamp]"></script>
	<!--{/if}-->

	<!--{if $_G[uid] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])}-->
	<script type="text/javascript" src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=$_G[timestamp]"></script>
	<!--{/if}-->

	<!--{if !isset($_G['cookie']['sendmail'])}-->
	<script type="text/javascript" src="home.php?mod=misc&ac=sendmail&rand=$_G[timestamp]"></script>
	<!--{/if}-->

	<!--{if $_G[uid] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])}-->
	<script type="text/javascript" src="misc.php?mod=patch&action=checkpatch&rand=$_G[timestamp]"></script>
	<!--{/if}-->

<!--{/if}-->

<!--{if $_GET['diy'] == 'yes'}-->
	<!--{if check_diy_perm($topic) && (empty($do) || $do != 'index')}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}common_diy.js?{VERHASH}"></script>
		<script type="text/javascript" src="{$_G[setting][jspath]}portal_diy{if !check_diy_perm($topic, 'layout')}_data{/if}.js?{VERHASH}"></script>
	<!--{/if}-->
	<!--{if $space['self'] && CURMODULE == 'space' && $do == 'index'}-->
		<script type="text/javascript" src="{$_G[setting][jspath]}common_diy.js?{VERHASH}"></script>
		<script type="text/javascript" src="{$_G[setting][jspath]}space_diy.js?{VERHASH}"></script>
	<!--{/if}-->
<!--{/if}-->
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1}-->
	<script type="text/javascript">patchNotice();</script>
<!--{/if}-->
<!--{if $_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])}-->
	<div class="focus plugin" id="plugin_notice"></div>
	<script type="text/javascript">pluginNotice();</script>
<!--{/if}-->
<!--{if !$_G['setting']['bbclosed'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])}-->
	<div class="focus plugin" id="ip_notice"></div>
	<script type="text/javascript">ipNotice();</script>
<!--{/if}-->
<!--{if $_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G[uid]]) || $_G['cookie']['promptstate_'.$_G[uid]] != $_G['member']['newprompt']) && $_GET['do'] != 'notice'}-->
	<script type="text/javascript">noticeTitle();</script>
<!--{/if}-->

<!--{if ($_G[member][newpm] || $_G[member][newprompt]) && empty($_G['cookie']['ignore_notice'])}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}html5notification.js?{VERHASH}"></script>
	<script type="text/javascript">
	var h5n = new Html5notification();
	if(h5n.issupport()) {
		<!--{if $_G[member][newpm] && $_GET[do] != 'pm'}-->
		h5n.shownotification('pm', '$_G[siteurl]home.php?mod=space&do=pm', '<!--{avatar($_G[uid],small,true)}-->', '{lang newpm_subject}', '{lang newpm_notice_info}');
		<!--{/if}-->
		<!--{if $_G[member][newprompt] && $_GET[do] != 'notice'}-->
				<!--{loop $_G['member']['category_num'] $key $val}-->
					<!--{eval $noticetitle = lang('template', 'notice_'.$key);}-->
					h5n.shownotification('notice_$key', '$_G[siteurl]home.php?mod=space&do=notice&view=$key', '<!--{avatar($_G[uid],small,true)}-->', '$noticetitle ($val)', '{lang newnotice_notice_info}');
				<!--{/loop}-->
		<!--{/if}-->
	}
	</script>
<!--{/if}-->

<!--{eval userappprompt();}-->
<!--{if $_G['basescript'] != 'userapp'}-->
<div id="scrolltop" style="display:none;">
	<!--{if $_G[fid] && $_G['mod'] == 'viewthread'}-->
	<!--{/if}-->
	<span hidefocus="true"><a title="{lang scrolltop}" onclick="window.scrollTo('0','0')" id="scrolltopa" ><b>{lang scrolltop}</b></a></span>
	<!--{if $_G[fid]}-->
	<span>
		<!--{if $_G['mod'] == 'viewthread'}-->
		<a href="forum.php?mod=forumdisplay&fid=$_G[fid]" hidefocus="true" class="returnlist" title="{lang return_list}"><b>{lang return_list}</b></a>
		<!--{else}-->
		<a href="forum.php" hidefocus="true" class="returnboard" title="{lang return_forum}"><b>{lang return_forum}</b></a>
		<!--{/if}-->
	</span>
	<!--{/if}-->
</div>


<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
<!--{/if}-->
<!--{if isset($_G['makehtml'])}-->
	<script type="text/javascript" src="{$_G[setting][jspath]}html2dynamic.js?{VERHASH}"></script>
	<script type="text/javascript">
		var html_lostmodify = {TIMESTAMP};
		htmlGetUserStatus();
		<!--{if isset($_G['htmlcheckupdate'])}-->
		htmlCheckUpdate();
		<!--{/if}-->
	</script>
<!--{/if}-->
<!--{eval output();}-->

</body>
</html>
