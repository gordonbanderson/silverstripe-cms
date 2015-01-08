<?php 
	class SiteTreeCacheExtension extends DataExtension {
	public function onBeforeVersionedPublish($fromStage, $toStage, $createNewVersion) {
		SiteTree::clearIsOrphanedCache();
		SiteTree::clearCanViewCache();
	}
}